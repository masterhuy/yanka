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

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('datamigration.php');
$module = new DataMigration();

if (Tools::isSubmit('submitConnection') &&
    Tools::isSubmit('_token') &&
    Tools::getValue('_token') == $module->secure_key) {
    Shop::setContext(Shop::CONTEXT_SHOP, (int)Tools::getValue('shop'));
    // die(Tools::jsonEncode($_POST));
    $result = array();
    if (Tools::isEmpty(Tools::getValue('JDM_SERVER'))) {
        $result['status'] = false;
        $result['message'] = "Server is empty";
        die(Tools::jsonEncode($result));
    }
    if (Tools::isEmpty(Tools::getValue('JDM_DATABASE'))) {
        $result['status'] = false;
        $result['message'] = "Database name is empty";
        die(Tools::jsonEncode($result));
    }
    if (Tools::isEmpty(Tools::getValue('JDM_USER'))) {
        $result['status'] = false;
        $result['message'] = "Username is empty";
        die(Tools::jsonEncode($result));
    }
    if (Tools::getValue('JDM_DATABASE') == _DB_NAME_) {
        $result['status'] = false;
        $result['message'] = "Source shop database can't be the same as target shop";
        die(Tools::jsonEncode($result));
    }
    if (Tools::getValue('JDM_VER') == 'Ps16') {
        $ver = '1.6';
    } elseif (Tools::getValue('JDM_VER') == 'Ps15') {
        $ver = '1.5';
    } else {
        $ver = '1.7';
    }
    try {
        Configuration::updateGlobalValue('JDM_SERVER', Tools::getValue('JDM_SERVER'));
        Configuration::updateGlobalValue('JDM_DATABASE', Tools::getValue('JDM_DATABASE'));
        Configuration::updateGlobalValue('JDM_USER', Tools::getValue('JDM_USER'));
        Configuration::updateGlobalValue('JDM_PWD', Tools::getValue('JDM_PWD'));
        Configuration::updateGlobalValue('JDM_PREFIX', Tools::getValue('JDM_PREFIX'));
        Configuration::updateGlobalValue('JDM_VER', Tools::getValue('JDM_VER'));
        $db = new JmsData();
        $version = $db->getConfiguration('PS_INSTALL_VERSION');
        if (strpos($version, $ver) === false) {
            $result['status'] = false;
            $result['message'] = "Database selected is not $ver version";
            die(Tools::jsonEncode($result));
        }
        $result['status'] = true;
        $result['source'] = $db->getSourceShops();
    } catch (Exception $e) {
        $result['message'] = $e->getMessage();
        $result['status'] = false;
    }
    die(Tools::jsonEncode($result));
}
