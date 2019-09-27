<?php
/**
* 2007-2017 PrestaShop
*
*  EU GDPR
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class EugdprCustomerModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $id_lang = $this->context->language->id;
        $id_customer = $this->context->customer->id;
        if ($id_customer == null) {
            Tools::redirect($this->context->link->getPageLink('my-account', true));
        }
        $manually = (bool)Configuration::get('jgdpr_manually');
        if (Tools::isSubmit('remove')) {
            if ($manually) {
                $this->addRequest();
                $message = Configuration::get("jgdpr_mesafter_request_{$id_lang}");
            } else {
                $this->module->deleteData($this->context->customer);
                $message = Configuration::get("jgdpr_mesafter_{$id_lang}");
            }
            $this->context->smarty->assign(array(
                'request' => $manually,
                'back_url' => $this->context->link->getPageLink('my-account', true),
                'message' => $message,
            ));
            $this->setTemplate('module:eugdpr/views/templates/front/removaldone.tpl');
        } else {
            if ($manually) {
                $message = Configuration::get("jgdpr_mesbefore_request_{$id_lang}");
                $addresses = false;
            } else {
                $message = Configuration::get("jgdpr_mesbefore_{$id_lang}");
                $addresses = $this->module->getAddresses($this->context->customer);
            }
            $this->context->smarty->assign(array(
                'request' => $manually,
                'addresses' => $addresses,
                'remove_url' => $this->context->link->getModuleLink('eugdpr', 'customer', array('remove' => 1)),
                'message' => $message,
            ));
            $this->setTemplate('module:eugdpr/views/templates/front/removalconfirm.tpl');
        }
    }
    public function setMedia()
    {
        parent::setMedia();

        $this->registerStylesheet(
            'module-eugdpr-style',
            'modules/'.$this->module->name.'/views/css/gdpr-style.css',
            array(
                'media' => 'all',
                'priority' => 200,
            )
        );
    }
    public function addRequest()
    {
        $customer = $this->context->customer;
        if (null != $this->context->customer->id) {
            Db::getInstance()->insert('eugdpr_request', array(
                'id_customer' => (int)$customer->id,
                'name' => pSQL($customer->firstname.' '.$customer->lastname),
                'date_add' => date('Y-m-d H:i:s')
            ), false, true, Db::ON_DUPLICATE_KEY);
        }
    }
}
