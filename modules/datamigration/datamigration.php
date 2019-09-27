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

include_once('class/JmsData.php');
if (!defined('_PS_VERSION_')) {
    exit;
}

class DataMigration extends Module
{
    public function __construct()
    {
        $this->name = 'datamigration';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Data Migration');
        $this->description = $this->l('No description');
        $this->lang = (int)Configuration::get('PS_LANG_DEFAULT');
    }
    public function install()
    {
        $this->_clearCache('*');
        if (!parent::install()) {
            throw new Exception('Register Hook failed');
        }
        $res = Configuration::updateGlobalValue('JDM_SERVER', _DB_SERVER_);
        $res &= Configuration::updateGlobalValue('JDM_DATABASE', _DB_NAME_);
        $res &= Configuration::updateGlobalValue('JDM_USER', _DB_USER_);
        $res &= Configuration::updateGlobalValue('JDM_PWD', _DB_PASSWD_);
        $res &= Configuration::updateGlobalValue('JDM_PREFIX', _DB_PREFIX_);
        $res &= Configuration::updateGlobalValue('JDM_VER', 'Ps16');
        $res &= Configuration::updateGlobalValue('JDM_CHECKALL', 0);
        $res &= Configuration::updateGlobalValue('JDM_PROD', 0);
        // $res &= Configuration::updateGlobalValue('JDM_LOCA', 0);
        $res &= Configuration::updateGlobalValue('JDM_CURR', 0);

        $res &= Configuration::updateGlobalValue('JDM_CATE', 0);
        $res &= Configuration::updateGlobalValue('JDM_MANU', 0);
        $res &= Configuration::updateGlobalValue('JDM_SUPP', 0);
        $res &= Configuration::updateGlobalValue('JDM_CARR', 0);

        $res &= Configuration::updateGlobalValue('JDM_TAX', 0);
        $res &= Configuration::updateGlobalValue('JDM_EMPL', 0);
        $res &= Configuration::updateGlobalValue('JDM_CUST', 0);
        $res &= Configuration::updateGlobalValue('JDM_CART', 0);
        $res &= Configuration::updateGlobalValue('JDM_ORDE', 0);
        $res &= Configuration::updateGlobalValue('JDM_CMS', 0);
        $res &= Configuration::updateGlobalValue('JDM_SEO', 0);
        $res &= Configuration::updateGlobalValue('jdm_dindex', 0);
        $res &= Configuration::updateGlobalValue('jdm_tindex', 0);
        $res &= Configuration::updateGlobalValue('jdm_offset', 0);

        $res &= Configuration::updateGlobalValue('JDMKEEP_PROD', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_CURR', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_CATE', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_MANU', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_SUPP', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_CARR', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_TAX', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_EMPL', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_CUST', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_CART', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_ORDE', 0);
        $res &= Configuration::updateGlobalValue('JDMKEEP_CMS', 0);


        $res &= Configuration::updateGlobalValue('JDM_CLEAN', 0);
        // $res &= Configuration::updateGlobalValue('JDM_KEEP_PROD', 0);
        if (!$res) {
            throw new Exception('Initialize Setting Failed');
        }
        return true;
    }
    public function uninstall()
    {
        // @unlink($this->logger->getFilename());
        if (!parent::uninstall() ||
            // !$this->dataClass->uninstallDb() ||
            !Configuration::deleteByName('JDM_SERVER') ||
            !Configuration::deleteByName('JDM_DATABASE') ||
            !Configuration::deleteByName('JDM_USER') ||
            !Configuration::deleteByName('JDM_PWD') ||
            !Configuration::deleteByName('JDM_PREFIX') ||
            !Configuration::deleteByName('JDM_VER') ||
            !Configuration::deleteByName('JDM_CHECKALL') ||
            !Configuration::deleteByName('JDM_PROD') ||
            // !Configuration::deleteByName('JDM_LOCA') ||
            !Configuration::deleteByName('JDM_CURR') ||
            !Configuration::deleteByName('JDM_CLEAN') ||
            !Configuration::deleteByName('JDM_CATE') ||
            !Configuration::deleteByName('JDM_MANU') ||
            !Configuration::deleteByName('JDM_SUPP') ||
            !Configuration::deleteByName('JDM_CARR') ||
            !Configuration::deleteByName('JDM_TAX') ||
            !Configuration::deleteByName('JDM_EMPL') ||
            !Configuration::deleteByName('JDM_CUST') ||
            !Configuration::deleteByName('JDM_CART') ||
            !Configuration::deleteByName('JDM_ORDE') ||
            !Configuration::deleteByName('JDM_CMS') ||
            !Configuration::deleteByName('JDMKEEP_PROD') ||
            !Configuration::deleteByName('JDMKEEP_CURR') ||
            !Configuration::deleteByName('JDMKEEP_CATE') ||
            !Configuration::deleteByName('JDMKEEP_MANU') ||
            !Configuration::deleteByName('JDMKEEP_SUPP') ||
            !Configuration::deleteByName('JDMKEEP_CARR') ||
            !Configuration::deleteByName('JDMKEEP_TAX') ||
            !Configuration::deleteByName('JDMKEEP_EMPL') ||
            !Configuration::deleteByName('JDMKEEP_CUST') ||
            !Configuration::deleteByName('JDMKEEP_CART') ||
            !Configuration::deleteByName('JDMKEEP_ORDE') ||
            !Configuration::deleteByName('JDMKEEP_CMS') ||
            !Configuration::deleteByName('jdm_dindex') ||
            !Configuration::deleteByName('jdm_tindex') ||
            !Configuration::deleteByName('jdm_offset') ||
            !Configuration::deleteByName('JDM_SEO')
        ) {
            return false;
        }
        return true;
    }
    private function initWizard()
    {
        $wizard = array();
        $wizard['steps'] = array(
            'connection' => $this->l('Connection'),
            'configuration' => $this->l('Configuration'),
            'migration' => $this->l('Migration')
        );
        $wizard['content'] = array(
            'connection' => $this->renderConnectionStep(),
            'configuration' => $this->renderConfigurationStep(),
            'migration' => $this->renderMigrationStep(),
        );
        return $wizard;
    }
    private function renderConnectionStep()
    {

        $fields_form = array();
        $fields_form['form']['form'] = array(
            'id_form' => 'connection',
            'input' => array(
                array(
                    'type' => 'text',
                    'col' => 4,
                    'label' => $this->l('Server'),
                    'name' => 'JDM_SERVER',
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'col' => 4,
                    'label' => $this->l('Database Name'),
                    'name' => 'JDM_DATABASE',
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'col' => 4,
                    'label' => $this->l('Username'),
                    'name' => 'JDM_USER',
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'col' => 4,
                    'label' => $this->l('Password'),
                    'name' => 'JDM_PWD',
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'col' => 4,
                    'label' => $this->l('Prefix'),
                    'name' => 'JDM_PREFIX',
                    'required' => true,
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Prestashop Version'),
                    'name' => 'JDM_VER',
                    'options' => array(
                        'id' => 'id',
                        'name' => 'name',
                        'query' => array(
                            array(
                                'id' => 'Ps16',
                                'name' => '1.6',
                            ),
                            array(
                                'id' => 'Ps15',
                                'name' => '1.5',
                            ),
                        ),
                    ),
                ),
            )
        );
        /* RENDER */
        $helper = new HelperForm();
        $helper->default_form_language = $this->lang;
        $helper->allow_employee_form_lang = $this->lang;
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submitConnection';
        $helper->fields_value = array(
            'JDM_SERVER' => Configuration::get('JDM_SERVER'),
            'JDM_DATABASE' => Configuration::get('JDM_DATABASE'),
            'JDM_USER' => Configuration::get('JDM_USER'),
            'JDM_PWD' => Configuration::get('JDM_PWD'),
            'JDM_PREFIX' => Configuration::get('JDM_PREFIX'),
            'JDM_VER' => Configuration::get('JDM_VER'),
        );
        $form = $helper->generateForm($fields_form);
        return $form;
    }
    private function renderConfigurationStep()
    {
        $fields_form = array();
        $fields_form['form']['form'] = array(
            'legend' => array(
                'title' => $this->l('Data Migration'),
                'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Check All'),
                    'name' => 'JDM_CHECKALL',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Product'),
                    'name' => 'JDM_PROD',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                // array(
                //     'type' => 'switch',
                //     'label' => $this->l('Localization'),
                //     'name' => 'JDM_LOCA',
                //     'values'    => array(
                //         array('value' => 1),
                //         array('value' => 0)
                //     ),
                // ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Currency'),
                    'name' => 'JDM_CURR',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Category'),
                    'name' => 'JDM_CATE',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Manufacturer'),
                    'name' => 'JDM_MANU',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Supplier'),
                    'name' => 'JDM_SUPP',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Carrier'),
                    'name' => 'JDM_CARR',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Tax'),
                    'name' => 'JDM_TAX',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Employee'),
                    'name' => 'JDM_EMPL',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Customer'),
                    'name' => 'JDM_CUST',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Cart'),
                    'hint' => $this->l('Require Customer And Product'),
                    'name' => 'JDM_CART',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Order'),
                    'hint' => $this->l('Require Customer, Cart, Product, Carrier'),
                    'name' => 'JDM_ORDE',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('CMS'),
                    'name' => 'JDM_CMS',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                // array(
                //     'type' => 'switch',
                //     'label' => $this->l('SEO'),
                //     'name' => 'JDM_SEO',
                //     'values'    => array(
                //         array('value' => 1),
                //         array('value' => 0)
                //     ),
                // ),
            )
        );
        $source = $this->db->getSourceShops();
        $target = $this->db->getTargetShops();
        $fields_form[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('Utility Options'),
                'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Clean Shop'),
                    'name' => 'JDM_CLEAN',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Source Shop'),
                    'name' => 'JDM_SOURCE',
                    'options' => array(
                        'id' => 'id_shop',
                        'name' => 'name',
                        'query' => $target,
                    ),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Target Shop'),
                    'name' => 'JDM_TARGET',
                    'options' => array(
                        'id' => 'id_shop',
                        'name' => 'name',
                        'query' => $target,
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Product'),
                    'name' => 'JDMKEEP_PROD',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),

                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Currency'),
                    'name' => 'JDMKEEP_CURR',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Category'),
                    'name' => 'JDMKEEP_CATE',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Manufacturer'),
                    'name' => 'JDMKEEP_MANU',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Supplier'),
                    'name' => 'JDMKEEP_SUPP',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Carrier'),
                    'name' => 'JDMKEEP_CARR',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Tax'),
                    'name' => 'JDMKEEP_TAX',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Customer'),
                    'name' => 'JDMKEEP_CUST',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('CKeep ID Cart'),
                    'name' => 'JDMKEEP_CART',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Order'),
                    'name' => 'JDMKEEP_ORDE',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID CMS'),
                    'name' => 'JDMKEEP_CMS',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Keep ID Employee'),
                    'name' => 'JDMKEEP_EMPL',
                    'values'    => array(
                        array('value' => 1),
                        array('value' => 0)
                    ),
                ),

                // array(
                //     'type' => 'switch',
                //     'label' => $this->l('Keep product ID'),
                //     'name' => 'JDM_KEEP_PROD',
                //     'values'    => array(
                //         array('value' => 1),
                //         array('value' => 0)
                //     ),
                // ),
            )
        );
        $fields_form['form']['form']['id_form'] = 'configuration';
        // dump(microtime(true)-$aaa);
        /* RENDER */
        $helper = new HelperForm();
        $helper->default_form_language = $this->lang;
        $helper->allow_employee_form_lang = $this->lang;
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submitConfiguration';
        $helper->fields_value = array(
            'JDM_CHECKALL' => Configuration::get('JDM_CHECKALL'),
            'JDM_PROD' => Configuration::get('JDM_PROD'),
            // 'JDM_LOCA' => Configuration::get('JDM_LOCA'),
            'JDM_CURR' => Configuration::get('JDM_CURR'),
            'JDM_CATE' => Configuration::get('JDM_CATE'),
            'JDM_MANU' => Configuration::get('JDM_MANU'),
            'JDM_SUPP' => Configuration::get('JDM_SUPP'),
            'JDM_CARR' => Configuration::get('JDM_CARR'),
            'JDM_TAX' => Configuration::get('JDM_TAX'),
            'JDM_EMPL' => Configuration::get('JDM_EMPL'),
            'JDM_CUST' => Configuration::get('JDM_CUST'),
            'JDM_CART' => Configuration::get('JDM_CART'),
            'JDM_ORDE' => Configuration::get('JDM_ORDE'),
            'JDM_CMS' => Configuration::get('JDM_CMS'),
            // 'JDM_SEO' => Configuration::get('JDM_SEO'),
            'JDMKEEP_PROD' => Configuration::get('JDMKEEP_PROD'),
            'JDMKEEP_CURR' => Configuration::get('JDMKEEP_CURR'),
            'JDMKEEP_CATE' => Configuration::get('JDMKEEP_CATE'),
            'JDMKEEP_MANU' => Configuration::get('JDMKEEP_MANU'),
            'JDMKEEP_SUPP' => Configuration::get('JDMKEEP_SUPP'),
            'JDMKEEP_CARR' => Configuration::get('JDMKEEP_CARR'),
            'JDMKEEP_TAX' => Configuration::get('JDMKEEP_TAX'),
            'JDMKEEP_EMPL' => Configuration::get('JDMKEEP_EMPL'),
            'JDMKEEP_CUST' => Configuration::get('JDMKEEP_CUST'),
            'JDMKEEP_CART' => Configuration::get('JDMKEEP_CART'),
            'JDMKEEP_ORDE' => Configuration::get('JDMKEEP_ORDE'),
            'JDMKEEP_CMS' => Configuration::get('JDMKEEP_CMS'),
            'JDM_SOURCE' => $source[0],
            'JDM_TARGET' => Configuration::get('JDM_TARGET'),

            'JDM_CLEAN' => Configuration::get('JDM_CLEAN'),
            // 'JDM_KEEP_PROD' => Configuration::get('JDM_KEEP_PROD'),
        );
        $form = $helper->generateForm($fields_form);
                    return $form;
    }
    public function renderMigrationStep()
    {
        return $this->display(__FILE__, 'datalist.tpl');
    }
    public function getContent()
    {
        $this->db = new JmsData();
        if (Tools::isSubmit('clearcache')) {
            $shop = Context::getContext()->shop;
            $id_shop = $shop->id;
            Shop::setContext(Shop::CONTEXT_SHOP, (int)Configuration::get('JDM_TARGET'));
            Tools::clearSmartyCache();
            Tools::clearXMLCache();
            Media::clearCache();
            Tools::generateIndex();
            Search::indexation(true);
            Shop::setContext(Shop::CONTEXT_SHOP, $id_shop);
            array_map('unlink', glob(_PS_IMG_DIR_.'tmp/product_mini_*.jpg'));
            // $shop->setContext(Shop::CONTEXT_SHOP, $id_shop);
            // Shop::setContext(Shop::CONTEXT_SHOP, 2);
            // dump(Context::getContext()->shop);
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.
                $this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
        }
        $html = '';
        $this->context->controller->addJqueryPlugin('smartWizard');
        $html .= $this->renderWizard();
        return $html;
    }
    private function renderWizard()
    {
        $shop = Shop::getContextShopID(true);
        $wizard = $this->initWizard();

        $this->context->smarty->assign(
            array(
                'wizard' => $wizard,
                'check_url' => __PS_BASE_URI__.'modules/'.$this->name.'/ajax_checkconnection.php?shop='.
                $shop.'&_token='.$this->secure_key,
                'config_process_url' => __PS_BASE_URI__.'modules/'.$this->name.
                '/ajax_configuration.php?shop='.$shop.'&_token='.$this->secure_key,
                'sse_url' => __PS_BASE_URI__.'modules/'.$this->name.'/sse_migration.php?shop='.$shop,
                'clear_cache_url' => AdminController::$currentIndex.'&configure='.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules').'&clearcache',
            )
        );

        $display = $this->display(__FILE__, 'wizard.tpl');
                    return $display;
    }
}
