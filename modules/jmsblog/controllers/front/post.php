<?php
/**
* 2007-2017 PrestaShop
*
* Jms Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
session_start();
include_once(_PS_MODULE_DIR_.'jmsblog/class/JmsBlogHelper.php');
include_once(_PS_MODULE_DIR_.'jmsblog/JmsComment.php');
include_once(_PS_MODULE_DIR_.'jmsblog/class/capcha.php');
class JmsblogPostModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $this->context->controller->addCSS($this->module->getPathUri().'views/css/style.css', 'all');
        $this->context->controller->addJS($this->module->getPathUri().'views/js/jquery.validate.min.js', 'all');
        $post_id    = (int)Tools::getValue('post_id');
        $jmsblog_setting = JmsBlogHelper::getSettingFieldsValues();
        $module_instance = new JmsBlog();
        JmsBlogHelper::updateViews($post_id);
        $post       = $this->getPost($post_id);
        $cerrors = array ();
        $msg = (int)Tools::getValue('msg', 0);
        if (Tools::getValue('action') == 'submitComment') {
            if (Tools::isSubmit('capcha') && Tools::strtolower(Tools::getValue('capcha')) == Tools::strtolower($_SESSION['capcha'])) {
                $comment = new JmsComment();
                $comment->title = $post['title'];
                $comment->post_id = $post_id;
                $comment->customer_name = Tools::getValue('customer_name');
                $comment->email = Tools::getValue('email');
                $comment->comment = Tools::getValue('comment');
                $comment->customer_site = Tools::getValue('customer_site');
                $comment->time_add = date('Y-m-d H:i:s');
                if ((int)$jmsblog_setting['JMSBLOG_AUTO_APPROVE_COMMENT']) {
                    $comment->status = 1;
                } else {
                    $comment->status = -2;
                }
                $lasttime = $this->getLatCommentTime($comment->email);
                $res = false;
                if (strtotime($lasttime) + (int)$jmsblog_setting['JMSBLOG_COMMENT_DELAY'] < time()) {
                    $res = $comment->add();
                    if (!$res) {
                        $cerrors[] = $module_instance->l('The comment could not be added.');
                    } else {
                        Tools::redirect('index.php?fc=module&module=jmsblog&controller=post&msg=1&post_id='.$post_id."#comments");
                    }
                } else {
                    $cerrors[] = $module_instance->l('Please wait before posting another comment').' '.$jmsblog_setting['JMSBLOG_COMMENT_DELAY'].' '.$module_instance->l('seconds before posting a new comment');
                }
            } else {
                $cerrors[] = $module_instance->l('Invalid capcha');
            }
        }
        $comments = $this->getComments($post_id);
        $category = JmsBlogHelper::getCategory($post['category_id']);
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        $use_https = false;
        if (isset($force_ssl) && $force_ssl) {
            $use_https = true;
        }
        $this->context->controller->addCSS($this->module->getPathUri().'css/style.css', 'all');
        $this->context->smarty->assign(array('meta_title' => $post['title']));
		if(Tools::getValue('layout') != '') {
			$post_layout = Tools::getValue('layout').'.tpl';
		} elseif (Configuration::get('JMSBLOG_POST_LAYOUT')) {
			$post_layout = Configuration::get('JMSBLOG_POST_LAYOUT');
		}
        $this->context->smarty->assign(array(
            'post' => $post,
            'current_category' => $category,
            'msg' => $msg,
            'comments' => $comments,
            'customer' => (array)$this->context->customer,
            'jmsblog_setting' => $jmsblog_setting,
            'cerrors' => $cerrors,
            'link' => $this->context->link,
            'image_baseurl' => $this->module->getPathUri().'views/img/',
            'module_dir' => _PS_MODULE_DIR_.'jmsblog/views/templates/front/',
			'use_https' => $use_https,
			'post_layout' => $post_layout,
            'ajax_url' => _PS_MODULE_DIR_.'jmsblog/ajax_jmsblog.php',
        ));
        $this->setTemplate('module:jmsblog/views/templates/front/post.tpl');
    }
    public function getLatCommentTime($email)
    {
        $sql = '
                SELECT pc.`time_add`
                FROM `'._DB_PREFIX_.'jmsblog_posts_comments` pc
                WHERE pc.`email` = \''.$email.'\'
                ORDER BY pc.`time_add` DESC';
        $result = Db::getInstance()->getValue($sql);
        return $result;
    }
    public function getPost($post_id)
    {
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        $sql = '
            SELECT hss.`post_id`, hssl.`image`,hss.`link_video`,hss.`category_id`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`created`, hss.`modified`, hss.`views`,
            hssl.`alias`, hssl.`fulltext`, hssl.`introtext`, hssl.`meta_desc`, hssl.`meta_key`, hssl.`key_ref`, hss.`category_id`, hscl.`title` as category_name, hscl.`alias` as category_alias
            FROM '._DB_PREFIX_.'jmsblog_posts hss
            LEFT JOIN '._DB_PREFIX_.'jmsblog_posts_lang hssl ON (hss.post_id = hssl.post_id)
            LEFT JOIN '._DB_PREFIX_.'jmsblog_categories hsc ON (hsc.category_id = hss.category_id)
            LEFT JOIN '._DB_PREFIX_.'jmsblog_categories_lang hscl ON (hscl.category_id = hss.category_id)
            WHERE hssl.id_lang = '.(int)$id_lang.
            ' AND hss.`post_id` = '.$post_id.'
            ORDER BY hss.ordering';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
    }

    public function getComments($post_id)
    {
        $sql = '
        SELECT * FROM `'._DB_PREFIX_.'jmsblog_posts_comments`
        WHERE `post_id` ='.$post_id.' AND `status` = 1
        ORDER BY `time_add` ASC
        ';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
}
