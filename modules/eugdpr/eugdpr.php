<?php
/**
*  2007-2018 PrestaShop
*
*  EU GDPR
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2018 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class EUGDPR extends Module
{
    public function __construct()
    {
        $this->name = 'eugdpr';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->module_key = '9273680c374638f40c70313853e00306';
        parent::__construct();
        $this->displayName = $this->l('EU - GDPR');

        $this->description = $this->l('This module assists website and webshop owners to comply with European privacy regulations known as GDPR. By May 24th, 2018 your site or shop has to comply to avoid large fines.');
    }
    public function install()
    {
        $languages = $this->context->controller->getLanguages();
        if (!parent::install() ||
            !$this->installDb() ||
            !$this->registerHook('header') ||
            !$this->registerHook('displayCustomerAccount') ||
            !$this->registerHook('displayContentWrapperBottom')
        ) {
            throw new Exception('Register Hook failed');
        }
        $res = Configuration::updateValue('jgdpr_manually', false);
        $res &= Configuration::updateValue('jgdpr_active', true);
        $res &= Configuration::updateValue('jgdpr_popup', true);
        foreach ($languages as $lang) {
            $res &= Configuration::updateValue(
                "jgdpr_mesbefore_{$lang['id_lang']}",
                'Are you sure you want to delete all your personal information? This action is irreversible.'
            );
            $res &= Configuration::updateValue(
                "jgdpr_mesafter_{$lang['id_lang']}",
                'Your personal data has been removed successfully.'
            );
            $res &= Configuration::updateValue(
                "jgdpr_mesbefore_request_{$lang['id_lang']}",
                'Do you want to send deletion request? '.
                'Your account will be removed after the request is accepted.'
            );
            $res &= Configuration::updateValue(
                "jgdpr_mesafter_request_{$lang['id_lang']}",
                'Your request has been sent successfully.'
            );
            $res &= Configuration::updateValue(
                "jgdpr_popup_content_{$lang['id_lang']}",
                'the EU general data protection regulation (GDPR) relaces the Data
                 Protection Directive 95/46/EC and was designed to harmonize
                 data privacy lows across Europe to protect and empower all EU.'
            );
        }
        $res &= Configuration::updateValue('jgdpr_popup_bg', '#000000');
        $res &= Configuration::updateValue('jgdpr_popup_bgoppa', '7');
        $res &= Configuration::updateValue('jgdpr_popup_color', '#ffffff');
        $res &= Configuration::updateValue('jgdpr_popup_pos', 'bottom');

        if (!$res) {
            throw new Exception('failed');
        }
        return true;
    }
    public function uninstall()
    {
        $languages = $this->context->controller->getLanguages();
        foreach ($languages as $lang) {
            Configuration::deleteByName("jgdpr_mesbefore_{$lang['id_lang']}");
            Configuration::deleteByName("jgdpr_mesafter_{$lang['id_lang']}");
            Configuration::deleteByName("jgdpr_mesbefore_request_{$lang['id_lang']}");
            Configuration::deleteByName("jgdpr_mesafter_request_{$lang['id_lang']}");
            Configuration::deleteByName("jgdpr_popup_content_{$lang['id_lang']}");
        }
        if (!parent::uninstall() ||
            !$this->uninstallDb() ||
            !Configuration::deleteByName('jgdpr_manually') ||
            !Configuration::deleteByName('jgdpr_active') ||
            !Configuration::deleteByName('jgdpr_popup') ||
            !Configuration::deleteByName('jgdpr_popup_bg') ||
            !Configuration::deleteByName('jgdpr_popup_bgoppa') ||
            !Configuration::deleteByName('jgdpr_popup_pos') ||
            !Configuration::deleteByName('jgdpr_popup_color')
        ) {
            return false;
        }
        return true;
    }
    public function installDb()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'eugdpr_request` (
                `id_customer` int(10) unsigned NOT NULL,
                `name` varchar(255) NOT NULL,
                `date_add` datetime NOT NULL,
                PRIMARY KEY (`id_customer`)
                ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
        //end update
        return Db::getInstance()->execute($sql);
    }
    public function uninstallDb()
    {
        $sql = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'eugdpr_request`';
        return Db::getInstance()->execute($sql);
    }
    public function getContent()
    {
        $this->context->controller->addCSS(_PS_MODULE_DIR_.$this->name.'/views/css/admin.css', 'all');
        $languages = $this->context->controller->getLanguages();
        $html = '';
        if (Tools::isSubmit('id_customer')) {
            $customer = new Customer(Tools::getValue('id_customer'));
            $this->deleteCustomer($customer);
            Db::getInstance()->delete('eugdpr_request', 'id_customer='.Tools::getValue('id_customer'));
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.
                Tools::getAdminTokenLite('AdminModules').'&accepted');
        } elseif (Tools::isSubmit('acceptall')) {
            $requests = $this->getAllrequests();
            foreach ($requests as $request) {
                $customer = new Customer($request['id_customer']);
                $this->deleteCustomer($customer);
                Db::getInstance()->delete('eugdpr_request', 'id_customer='.$request['id_customer']);
                unset($customer);
            }
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules').'&accepted');
        }
        if (Tools::isSubmit('accepted')) {
            $html .= $this->displayConfirmation($this->l('Request accepted'));
        }
        if (Tools::isSubmit('submitSetting')) {
            Configuration::updateValue('jgdpr_active', Tools::getValue('jgdpr_active'));
            Configuration::updateValue('jgdpr_manually', Tools::getValue('jgdpr_manually'));
            Configuration::updateValue('jgdpr_popup', Tools::getValue('jgdpr_popup'));
            Configuration::updateValue('jgdpr_popup_bg', Tools::getValue('jgdpr_popup_bg'));
            Configuration::updateValue('jgdpr_popup_bgoppa', Tools::getValue('jgdpr_popup_bgoppa'));
            Configuration::updateValue('jgdpr_popup_color', Tools::getValue('jgdpr_popup_color'));
            Configuration::updateValue('jgdpr_popup_pos', Tools::getValue('jgdpr_popup_pos'));
            foreach ($languages as $lang) {
                if (Tools::isSubmit("jgdpr_mesbefore_{$lang['id_lang']}")) {
                    Configuration::updateValue(
                        "jgdpr_mesbefore_{$lang['id_lang']}",
                        Tools::getValue("jgdpr_mesbefore_{$lang['id_lang']}")
                    );
                }
                if (Tools::isSubmit("jgdpr_mesbefore_{$lang['id_lang']}")) {
                    Configuration::updateValue(
                        "jgdpr_mesafter_{$lang['id_lang']}",
                        Tools::getValue("jgdpr_mesafter_{$lang['id_lang']}")
                    );
                }
                if (Tools::isSubmit("jgdpr_mesbefore_{$lang['id_lang']}")) {
                    Configuration::updateValue(
                        "jgdpr_mesbefore_request_{$lang['id_lang']}",
                        Tools::getValue("jgdpr_mesbefore_request_{$lang['id_lang']}")
                    );
                }
                if (Tools::isSubmit("jgdpr_mesbefore_{$lang['id_lang']}")) {
                    Configuration::updateValue(
                        "jgdpr_mesafter_request_{$lang['id_lang']}",
                        Tools::getValue("jgdpr_mesafter_request_{$lang['id_lang']}")
                    );
                }
                if (Tools::isSubmit("jgdpr_mesbefore_{$lang['id_lang']}")) {
                    Configuration::updateValue(
                        "jgdpr_popup_content_{$lang['id_lang']}",
                        Tools::getValue("jgdpr_popup_content_{$lang['id_lang']}")
                    );
                }
            }
            $html .= $this->displayConfirmation($this->l('Update Successfully'));
        }
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $general_fields = array(
            array(
                'type' => 'switch',
                'label' => $this->l('Active Module'),
                'desc' => $this->l('Active the module'),
                'name' => 'jgdpr_active',
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Manually Delete'),
                'desc' => $this->l('The customers will send deletion request instead of deleting data themself'),
                'name' => 'jgdpr_manually',
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Display Popup'),
                'desc' => $this->l('Display a message on front page'),
                'name' => 'jgdpr_popup',
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'popup'
            ),
            array(
                'type' => 'textarea',
                'lang' => true,
                'autoload_rte' => true,
                'label' => $this->l('Message before removing data'),
                'name' => 'jgdpr_mesbefore',
                'desc' => $this->l("This message is displayed before the customers press the remove button"),
                'form_group_class' => ((bool)Configuration::get('jgdpr_manually'))?'hide message':'show message',
                'tab' => 'general'
            ),
            array(
                'type' => 'textarea',
                'lang' => true,
                'autoload_rte' => true,
                'label' => $this->l('Message after removing data'),
                'name' => 'jgdpr_mesafter',
                'desc' => $this->l("This message is displayed after the customers's data cleared"),
                'form_group_class' => ((bool)Configuration::get('jgdpr_manually'))?'hide message':'show message',
                'tab' => 'general'
            ),
            array(
                'type' => 'textarea',
                'lang' => true,
                'autoload_rte' => true,
                'label' => $this->l('Message before requesting'),
                'name' => 'jgdpr_mesbefore_request',
                'desc' => $this->l("This message is displayed before the customers send deletion request"),
                'form_group_class' => (!(bool)Configuration::get('jgdpr_manually'))?'hide request':'show request',
                'tab' => 'general'
            ),
            array(
                'type' => 'textarea',
                'lang' => true,
                'autoload_rte' => true,
                'label' => $this->l('Message after requesting'),
                'name' => 'jgdpr_mesafter_request',
                'desc' => $this->l("This message is displayed after the customers's request sent"),
                'form_group_class' => (!(bool)Configuration::get('jgdpr_manually'))?'hide request':'show request',
                'tab' => 'general'
            ),
            array(
                'type' => 'textarea',
                'lang' => true,
                'autoload_rte' => true,
                'label' => $this->l('Popup Message Content'),
                'name' => 'jgdpr_popup_content',
                'desc' => $this->l("Customizable text for front page"),
                'tab' => 'popup'
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Popup Background'),
                'desc' => $this->l("Popup background color"),
                'name' => 'jgdpr_popup_bg',
                'tab' => 'popup',
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Popup Text Color'),
                'desc' => $this->l("Popup text color"),
                'name' => 'jgdpr_popup_color',
                'tab' => 'popup',
            ),
            array(
                'type' => 'number',
                'min' => 1,
                'max' => 10,
                'label' => $this->l('Popup Background Opacity'),
                'idesc' => $this->l("Insert value between 1 and 10"),
                'name' => 'jgdpr_popup_bgoppa',
                'tab' => 'popup',
            ),
            array(
                'type' => 'select',
                'desc' => $this->l("Select Popup Position"),
                'label' => $this->l('Popup Position'),
                'name' => 'jgdpr_popup_pos',
                'options' => array(
                    'id' => 'name',
                    'name' => 'name',
                    'query' => array(
                        array(
                            'name' => 'top',
                        ),
                        array(
                            'name' => 'bottom',
                        ),
                    ),
                ),
                'tab' => 'popup',
            ),
        );
        /* RENDER */
        $this->fields_options[0]['form'] = array(
            'tinymce' => true,
            'tabs' => array(
                'general' => 'General',
                'popup' => 'Popup Content',
            ),
            'legend' => array(
                'title' => '<span class="label label-info">'.$this->l('GDPR Setting').'</span>',
                'icon' => 'icon-cogs',
            ),
            'input' => $general_fields,
            'submit' => array('title' => $this->l('Save'), 'class' => 'button btn btn-primary'),
        );
        $helper = new HelperForm();
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->tpl_vars = array(
            'languages' => $languages,
            'id_language' => $this->context->language->id,
        );
        $this->fields_form = array();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submitSetting';
        $helper->fields_value = array(
            'jgdpr_active' => Tools::getValue('jgdpr_active', Configuration::get('jgdpr_active')),
            'jgdpr_manually' => Tools::getValue('jgdpr_manually', Configuration::get('jgdpr_manually')),
            'jgdpr_popup' => Tools::getValue(
                'jgdpr_popup',
                Configuration::get('jgdpr_popup')
            ),
            'jgdpr_mesbefore' => array(),
            'jgdpr_mesafter' => array(),
            'jgdpr_mesbefore_request' => array(),
            'jgdpr_mesafter_request' => array(),
            'jgdpr_popup_content' => array(),
            'jgdpr_popup_bg' => Tools::getValue(
                'jgdpr_popup_bg',
                Configuration::get('jgdpr_popup_bg')
            ),
            'jgdpr_popup_bgoppa' => Tools::getValue(
                'jgdpr_popup_bgoppa',
                Configuration::get('jgdpr_popup_bgoppa')
            ),
            'jgdpr_popup_color' => Tools::getValue(
                'jgdpr_popup_color',
                Configuration::get('jgdpr_popup_color')
            ),
            'jgdpr_popup_pos' => Tools::getValue(
                'jgdpr_popup_pos',
                Configuration::get('jgdpr_popup_pos')
            ),

        );
        foreach ($languages as $lang) {
            $helper->fields_value['jgdpr_mesafter'][$lang['id_lang']] = Tools::getValue(
                "jgdpr_mesafter_{$lang['id_lang']}",
                Configuration::get("jgdpr_mesafter_{$lang['id_lang']}")
            );
            $helper->fields_value['jgdpr_mesbefore'][$lang['id_lang']] = Tools::getValue(
                "jgdpr_mesbefore_{$lang['id_lang']}",
                Configuration::get("jgdpr_mesbefore_{$lang['id_lang']}")
            );
            $helper->fields_value['jgdpr_mesafter_request'][$lang['id_lang']] = Tools::getValue(
                "jgdpr_mesafter_request_{$lang['id_lang']}",
                Configuration::get("jgdpr_mesafter_request_{$lang['id_lang']}")
            );
            $helper->fields_value['jgdpr_mesbefore_request'][$lang['id_lang']] = Tools::getValue(
                "jgdpr_mesbefore_request_{$lang['id_lang']}",
                Configuration::get("jgdpr_mesbefore_request_{$lang['id_lang']}")
            );
            $helper->fields_value['jgdpr_popup_content'][$lang['id_lang']] = Tools::getValue(
                "jgdpr_popup_content_{$lang['id_lang']}",
                Configuration::get("jgdpr_popup_content_{$lang['id_lang']}")
            );
        }
        $html.=$helper->generateForm($this->fields_options);
        return $html.$this->renderRequestList();
    }
    private function renderRequestList()
    {
        $requests = Db::getInstance()->executeS("SELECT * FROM "._DB_PREFIX_."eugdpr_request");

        $fields_list = array(
            'id_customer' => array(
                'title' => $this->l('Id'),
                'type' => 'text',
                'remove_onclick' => true,
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'type' => 'text',
                'remove_onclick' => true,
            ),
            'date_add' => array(
                'title' => $this->l('Time'),
                'type' => 'text',
                'remove_onclick' => true,
            ),
        );
        $helper = new HelperList();
        $helper->listTotal = count($requests);
        $helper->shopLinkType = '';

        $helper->simple_header = false;
        $helper->tpl_vars = array('show_filters' => false);
        $helper->module = $this;

        // Actions to be displayed in the "Actions" column
        $helper->actions = array('accept', 'delete');

        $helper->identifier = 'id_customer';
        $helper->show_toolbar = true;
        $helper->title = 'Request List';
        $helper->table = $this->name.'_request';

        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        if ($helper->listTotal>0) {
            $helper->toolbar_btn['checkall'] = array(
                'href' => $helper->currentIndex.'&token='.$helper->token.'&acceptall',
                'desc' => $this->l('Accept All'),
                'class' => 'icon-check',
            );
        }
        return $helper->generateList($requests, $fields_list);
    }
    public function displayAcceptLink($token, $id)
    {
        $url = AdminController::$currentIndex.'&configure='.$this->name.'&token='.$token.'&id_customer='.$id;
        $html = '<a href="'.$url.'" title="accept" class="delete btn btn-primary"> Accept</a>';
        return $html;
    }
    private function getAllrequests()
    {
        return Db::getInstance()->executeS('SELECT id_customer from '._DB_PREFIX_.'eugdpr_request');
    }
    public function getAddresses($customer)
    {
        $lang = Configuration::get('PS_LANG_DEFAULT');
        return $customer->getAddresses($lang);
    }

    public function deleteData($customer)
    {
        $addresses = $this->getAddresses($customer);
        if (count($addresses)) {
            $addresses = ObjectModel::hydrateCollection('Address', $addresses);
            foreach ($addresses as $address) {
                $address = array_shift($addresses);
                $address->lastname = 'undefined';
                $address->firstname = 'undefined';
                $address->address1 = 'undefined';
                $address->address2 = 'undefined';
                $address->country = 'undefined';
                $address->alias = 'undefined';
                $address->phone = '';
                $address->vat_number = 'undefined';
                $address->id_state = 0;
                $address->postcode = 'undefined';
                $address->city = 'undefined';
                $address->company = 'undefined';
                $address->update();
            }
        }
        $customer->firstname = 'undefined';
        $customer->lastname = 'undefined';
        $customer->update();
        $orders = Order::getCustomerOrders((int) $customer->id);
        foreach ($orders as $order) {
            $order = new Order($order['id_order']);
            $order->deleteAssociations();
            $order->delete();
        }
    }
    public function deleteCustomer($customer)
    {
        $orders = Order::getCustomerOrders((int) $customer->id);
        foreach ($orders as $order) {
            $order = new Order($order['id_order']);
            $order->deleteAssociations();
            $order->delete();
        }
        $customer->delete();
    }

    public function hookDisplayContentWrapperBottom($params)
    {
        if (!Configuration::get('jgdpr_active') ||
            !Configuration::get('jgdpr_popup') ||
            $this->context->controller->php_self != 'index') {
            return null;
        }
        $lang_id = $this->context->language->id;
        $setting = Configuration::getMultiple(
            array(

                'jgdpr_popup_bg',
                'jgdpr_popup_bgoppa',
                'jgdpr_popup_color',
                'jgdpr_popup_pos',
            )
        );
        $setting['jgdpr_popup_content'] = Configuration::get("jgdpr_popup_content_{$lang_id}");
        $this->context->smarty->assign(
            array(
                'setting' => $setting,
            )
        );
        return $this->display(__FILE__, 'popup.tpl');
    }
    public function hookDisplayCustomerAccount($params)
    {
        if (!Configuration::get('jgdpr_active')) {
            return null;
        }
        $manually = (bool)Configuration::get('jgdpr_manually');
        $remove = $this->context->link->getModuleLink('eugdpr', 'customer');
        $title = ($manually) ? $this->l('send data deletion request') : $this->l('remove personal data');
        $icon = ($manually) ? '&#xE163;' : '&#xE872;';
        return '<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="discounts-link" href="'.$remove.'">
          <span class="link-item">
            <i class="material-icons">'.$icon.'</i>
            '.$title.'
          </span>
        </a>';
    }
}
