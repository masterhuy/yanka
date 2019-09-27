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

if (Tools::isSubmit('submitConfiguration') &&
    Tools::isSubmit('_token') &&
    Tools::getValue('_token') == $module->secure_key) {
    Shop::setContext(Shop::CONTEXT_SHOP, (int)Tools::getValue('shop'));
    $result = array();
    $result['status'] = true;
    Configuration::updateGlobalValue('aaa', Shop::getContextShopID(true));
    Configuration::updateGlobalValue('JDM_CHECKALL', Tools::getValue('JDM_CHECKALL', 0));
    Configuration::updateGlobalValue('JDM_PROD', Tools::getValue('JDM_PROD', 0));
    // Configuration::updateGlobalValue('JDM_LOCA', Tools::getValue('JDM_LOCA', 0));
    Configuration::updateGlobalValue('JDM_CURR', Tools::getValue('JDM_CURR', 0));
    Configuration::updateGlobalValue('JDM_CATE', Tools::getValue('JDM_CATE', 0));
    Configuration::updateGlobalValue('JDM_MANU', Tools::getValue('JDM_MANU', 0));
    Configuration::updateGlobalValue('JDM_SUPP', Tools::getValue('JDM_SUPP', 0));
    Configuration::updateGlobalValue('JDM_CARR', Tools::getValue('JDM_CARR', 0));
    Configuration::updateGlobalValue('JDM_TAX', Tools::getValue('JDM_TAX', 0));
    Configuration::updateGlobalValue('JDM_EMPL', Tools::getValue('JDM_EMPL', 0));
    Configuration::updateGlobalValue('JDM_CUST', Tools::getValue('JDM_CUST', 0));
    Configuration::updateGlobalValue(
        'JDM_CART',
        ((int)Tools::getValue('JDM_CART', 0) &&
        (int)Tools::getValue('JDM_CUST', 0) &&
        (int)Tools::getValue('JDM_PROD', 0))
    );
    Configuration::updateGlobalValue('JDM_ORDE', Tools::getValue('JDM_ORDE', 0));
    Configuration::updateGlobalValue('JDM_CMS', Tools::getValue('JDM_CMS', 0));
    Configuration::updateGlobalValue('JDMKEEP_PROD', Tools::getValue('JDMKEEP_PROD', 0));
    Configuration::updateGlobalValue('JDMKEEP_CURR', Tools::getValue('JDMKEEP_CURR', 0));
    Configuration::updateGlobalValue('JDMKEEP_CATE', Tools::getValue('JDMKEEP_CATE', 0));
    Configuration::updateGlobalValue('JDMKEEP_MANU', Tools::getValue('JDMKEEP_MANU', 0));
    Configuration::updateGlobalValue('JDMKEEP_SUPP', Tools::getValue('JDMKEEP_SUPP', 0));
    Configuration::updateGlobalValue('JDMKEEP_CARR', Tools::getValue('JDMKEEP_CARR', 0));
    Configuration::updateGlobalValue('JDMKEEP_TAX', Tools::getValue('JDMKEEP_TAX', 0));
    Configuration::updateGlobalValue('JDMKEEP_EMPL', Tools::getValue('JDMKEEP_EMPL', 0));
    Configuration::updateGlobalValue('JDMKEEP_CUST', Tools::getValue('JDMKEEP_CUST', 0));
    Configuration::updateGlobalValue('JDMKEEP_CART', Tools::getValue('JDMKEEP_CART', 0));
    Configuration::updateGlobalValue('JDMKEEP_ORDE', Tools::getValue('JDMKEEP_ORDE', 0));
    Configuration::updateGlobalValue('JDMKEEP_CMS', Tools::getValue('JDMKEEP_CMS', 0));
    // Configuration::updateGlobalValue('JDM_SEO', Tools::getValue('JDM_SEO', 0));
    Configuration::updateGlobalValue('JDM_CLEAN', Tools::getValue('JDM_CLEAN', 0));
    Configuration::updateGlobalValue('JDM_SOURCE', Tools::getValue('JDM_SOURCE', 0));
    Configuration::updateGlobalValue('JDM_TARGET', Tools::getValue('JDM_TARGET', 0));
    $ver = Configuration::get('JDM_VER');
    if ($ver != 'Ps16' && $ver != 'Ps15') {
        $ver = 'Ps16';
    }
    include_once($ver.'.php');
    $data = array(
        'product' => array(
            'migration' => Tools::getValue('JDM_PROD'),
            'keepid' => Tools::getValue('JDMKEEP_PROD'),
        ),
        // 'localization' => array(
        //     'migration' => Tools::getValue('JDM_LOCA'),
        //     'keepid' => 0,
        // ),
        'currency' => array(
            'migration' => Tools::getValue('JDM_CURR'),
            'keepid' => Tools::getValue('JDMKEEP_CURR'),
        ),
        'category' => array(
            'migration' => Tools::getValue('JDM_CATE'),
            'keepid' => Tools::getValue('JDMKEEP_CATE'),
        ),
        'manufacturer' => array(
            'migration' => Tools::getValue('JDM_MANU'),
            'keepid' => Tools::getValue('JDMKEEP_MANU'),
        ),
        'supplier' => array(
            'migration' => Tools::getValue('JDM_SUPP'),
            'keepid' => Tools::getValue('JDMKEEP_SUPP'),
        ),
        'carrier' => array(
            'migration' => Tools::getValue('JDM_CARR'),
            'keepid' => Tools::getValue('JDMKEEP_CARR'),
        ),
        'tax' => array(
            'migration' => Tools::getValue('JDM_TAX'),
            'keepid' => Tools::getValue('JDMKEEP_TAX'),
        ),
        'employee' => array(
            'migration' => Tools::getValue('JDM_EMPL'),
            'keepid' => Tools::getValue('JDMKEEP_EMPL'),
        ),
        'customer' => array(
            'migration' => Tools::getValue('JDM_CUST'),
            'keepid' => Tools::getValue('JDMKEEP_CUST'),
        ),
        'cart' => array(
            'migration' => ((int)Tools::getValue('JDM_CART', 0) &&
                (int)Tools::getValue('JDM_CUST', 0) &&
                (int)Tools::getValue('JDM_PROD', 0)),
            'keepid' => Tools::getValue('JDMKEEP_CART'),
        ),
        'order' => array(
            'migration' => (int)Tools::getValue('JDM_ORDE') &&
            (int)Tools::getValue('JDM_CART', 0) &&
            (int)Tools::getValue('JDM_CUST', 0) &&
            (int)Tools::getValue('JDM_PROD', 0) &&
            (int)Tools::getValue('JDM_CARR'),
            'keepid' => Tools::getValue('JDMKEEP_ORDE'),
        ),
        'cms' => array(
            'migration' => Tools::getValue('JDM_CMS'),
            'keepid' => Tools::getValue('JDMKEEP_CMS'),
        ),
        // 'seo' => array(
        //     'migration' => Tools::getValue('JDM_SEO'),
        //     'keepid' => 0,
        // ),
    );
    $prefix = Configuration::get('JDM_PREFIX');
    $db = new $ver();
    $langs = array_keys($db->getLanguages());
    Configuration::updateGlobalValue('JDM_lang', Tools::jsonEncode($langs));
    $idlangs = '('.implode(',', $langs).')';
    $source_shop_id = Configuration::get('JDM_SOURCE');
    $target_shop_id = Configuration::get('JDM_TARGET');
    if ($source_shop_id == 0 || $target_shop_id == 0) {
        $result['status'] = false;
        $result['message'] = 'No shop found';
    }
    $table = $db->table;
    $dataMigration = array();
    $idChangelog = array();
    try {
        foreach ($data as $key => $migration) {
            if ($migration['migration']) {
                $datacount = array();
                foreach ($table[$key] as $tabledata) {
                    $datacount[$tabledata['tablename']] = $db->countRecord($tabledata, $source_shop_id, $idlangs);
                    if (1) {
                        if (isset($tabledata['primary'])) {
                            $idChangelog[$tabledata['primary']] = $db->getIdChange($tabledata);
                        }
                    }
                }
                $dataMigration[$key] = $datacount;
            }
        }
        file_put_contents(_PS_MODULE_DIR_.'datamigration/idchange.tmp', Tools::jsonEncode($idChangelog));
        $result['data'] = $dataMigration;
        Configuration::updateGlobalValue('jdm_dindex', 0);
        Configuration::updateGlobalValue('jdm_tindex', 0);
        Configuration::updateGlobalValue('jdm_offset', 0);
    } catch (Exception $e) {
        $result['status'] = false;
        $result['message'] = $e->getMessage();
    }
    die(Tools::jsonEncode($result));
}
