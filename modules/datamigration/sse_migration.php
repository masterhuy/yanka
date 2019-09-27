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
include_once('class/JmsData.php');

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function send_message($id, $key, $value, $addition = 0)
{
    $d = array('key' => $key, 'value' => $value , 'addition' => $addition);

    echo "id: $id" . PHP_EOL;
    echo "data: " . Tools::jsonEncode($d) . PHP_EOL;
    echo PHP_EOL;
    ob_flush();
    flush();
}
function escape($array)
{
    foreach ($array as &$value) {
        $value = str_replace("'", "\'", $value);
    }
    return $array;
}
function createDir($path)
{
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    } else {
        $files = glob($path.'/*.jpg');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }
}
function deleteDir($dirPath)
{
    if (! is_dir($dirPath)) {
        return;
    }
    if (Tools::substr($dirPath, Tools::strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
Shop::setContext(Shop::CONTEXT_SHOP, (int)Tools::getValue('shop'));
$data = array(
    array(
        'data' => 'product',
        'migrate' => Configuration::get('JDM_PROD'),
        'keepid' => Configuration::get('JDMKEEP_PROD')
    ),
    array(
        'data' => 'currency',
        'migrate' => Configuration::get('JDM_CURR'),
        'keepid' => Configuration::get('JDMKEEP_CURR')
    ),
    array(
        'data' => 'category',
        'migrate' => Configuration::get('JDM_CATE'),
        'keepid' => Configuration::get('JDMKEEP_CATE')
    ),
    array(
        'data' => 'manufacturer',
        'migrate' => Configuration::get('JDM_MANU'),
        'keepid' => Configuration::get('JDMKEEP_MANU')
    ),
    array(
        'data' => 'supplier',
        'migrate' => Configuration::get('JDM_SUPP'),
        'keepid' => Configuration::get('JDMKEEP_SUPP')
    ),
    array(
        'data' => 'carrier',
        'migrate' => Configuration::get('JDM_CARR'),
        'keepid' => Configuration::get('JDMKEEP_CARR')
    ),
    array(
        'data' => 'tax',
        'migrate' => Configuration::get('JDM_TAX'),
        'keepid' => Configuration::get('JDMKEEP_TAX')
    ),
    array(
        'data' => 'employee',
        'migrate' => Configuration::get('JDM_EMPL'),
        'keepid' => 1
    ),
    array
    (
        'data' => 'customer',
        'migrate' => Configuration::get('JDM_CUST'),
        'keepid' => Configuration::get('JDMKEEP_CUST')
    ),
    array(
        'data' => 'cart',
        'migrate' => Configuration::get('JDM_CART'),
        'keepid' => Configuration::get('JDMKEEP_CART')
    ),
    array(
        'data' => 'order',
        'migrate' => Configuration::get('JDM_ORDE'),
        'keepid' => Configuration::get('JDMKEEP_ORDE')
    ),
    array(
        'data' => 'cms',
        'migrate' => Configuration::get('JDM_CMS'),
        'keepid' => Configuration::get('JDMKEEP_CMS')
    ),
    // array('data' => 'seo', 'migrate' => Configuration::get('JDM_SEO')),
);
$prefix = Configuration::get('JDM_PREFIX');
$clean = (bool)Configuration::get('JDM_CLEAN');
$ver = Configuration::get('JDM_VER');
if ($ver != 'Ps16' && $ver != 'Ps15') {
    $ver = 'Ps16';
}
include_once($ver.'.php');
$db = new $ver();
$table = $db->table;
$field_remove = $db->field_remove;
if (isset($db->field_update)) {
    $field_update = $db->field_update;
}
if (isset($db->field_add)) {
    $field_add = $db->field_add;
}
$id_shop = Configuration::get('JDM_TARGET');
$id_shop_group = (new Shop($id_shop))->id_shop_group;
$id_old_shop = Configuration::get('JDM_SOURCE');
$old_shop_url = $db->getOldShop($id_old_shop);
$dataindex = Configuration::get('jdm_dindex');
$tableindex = Configuration::get('jdm_tindex');
$offset = Configuration::get('jdm_offset');
$langs = $db->getLanguages();
$idls = '('.implode(',', array_keys($langs)).')';
$idChangelog = Tools::jsonDecode(Tools::file_get_contents(_PS_MODULE_DIR_.'datamigration/idchange.tmp'), true);
if ($dataindex >= count($data)) {
    if ($data[1]['migrate']) {
        $db->updateCurrency(isset($idChangelog['id_currency'])?$idChangelog['id_currency']:0, $id_shop);
    }
    if ($data[2]['migrate']) {
        Category::regenerateEntireNtree();
        send_message('info', 'generate tree', Shop::getContextShopID(true), 0);
    }
    send_message('CLOSE', 'close', Shop::getContextShopID(true), 10);
    exit;
}
$prosessingData = $data[$dataindex];
while (!$prosessingData['migrate']) {
    ++$dataindex;
    if ($dataindex >= count($data)) {
        if ($data[1]['migrate']) {
            $db->updateCurrency(isset($idChangelog['id_currency'])?$idChangelog['id_currency']:0, $id_shop);
        }
        if ($data[2]['migrate']) {
            Category::regenerateEntireNtree();
            send_message('info', 'generate tree', Shop::getContextShopID(true), 0);
        }
        send_message('CLOSE', 'close', Shop::getContextShopID(true), 10);
        exit;
    }
    Configuration::updateGlobalValue('jdm_dindex', $dataindex);
    $prosessingData = $data[$dataindex];
}
$table = $table[$prosessingData['data']];
$keepid = $prosessingData['keepid'];
$tabledata = $table[$tableindex];
$tablename = $tabledata['tablename'];

if ($clean && $offset == 0 && !$keepid) {
    send_message('MESSAGE', 'info', 'Clearing old data: '.$tablename.'...');
    try {
        if ($tablename == 'image') {
            $images = $db->getImages($id_shop);
            foreach ($images as $image) {
                $id_image = str_split($image['id_image']);
                $path_to_image = _PS_IMG_DIR_.'p/'.implode('/', $id_image);
                deleteDir($path_to_image);
                send_message('deleteImg', 'info', "Delete image $path_to_image");
            }
        }
        $db->clean($tabledata, $id_shop);
    } catch (Exception $e) {
        send_message('error', $tablename, $e->getMessage());
    }
    send_message('MESSAGE', 'info', 'Cleared '.$tablename);
}
// exit;
try {
    if (isset($field_add[$tablename])) {
        $records = $db->getAlls(
            $tabledata,
            $offset,
            $id_old_shop,
            $idls,
            $field_add[$tablename]['join'],
            $field_add[$tablename]['field'],
            $field_add[$tablename]['on']
        );
    } else {
        $records = $db->getAlls($tabledata, $offset, $id_old_shop, $idls);
    }
    if (count($records) < 50) {
        $tableindex++;
        // print_r('tableindex '.$tableindex);
        if ($tableindex >= count($table)) {
            Configuration::updateGlobalValue('jdm_dindex', ++$dataindex);
            Configuration::updateGlobalValue('jdm_tindex', 0);
            Configuration::updateGlobalValue('jdm_offset', 0);
        } else {
            Configuration::updateGlobalValue('jdm_tindex', $tableindex);
            Configuration::updateGlobalValue('jdm_offset', 0);
        }
    } else {
        Configuration::updateGlobalValue('jdm_offset', $offset+50);
    }
} catch (Exception $e) {
    send_message('error', $tablename, $e->getMessage());
}
if (strpos($tablename, 'lang') !== false) {
    $langDefault = (int)Configuration::get('PS_LANG_DEFAULT');
    $missLangs = $db->getMissingLanguages($langs);
}
foreach ($records as $key => $record) {
    if (1) {
        if (isset($tabledata['FK'])) {
            foreach ($tabledata['FK'] as $fk) {
                if (is_array($fk)) {
                    $keychange = $fk['PK'];
                } else {
                    $keychange = $fk;
                }
                if (isset($idChangelog[$keychange])) {
                    if ($keychange == 'id_image') {
                        $src_image = $record[$keychange];
                    }
                    if (is_array($fk)) {
                        $record[$fk['FK']] += ($record[$fk['FK']] > 0)?$idChangelog[$keychange]:0;
                    } else {
                        $record[$keychange] += ($record[$keychange] > 0)?$idChangelog[$keychange]:0;
                    }
                }
            }
        }
        if (isset($tabledata['primary']) && isset($idChangelog[$tabledata['primary']])) {
            if ($tabledata['primary'] == 'id_image') {
                $src_image = $record[$tabledata['primary']];
            }
            $record[$tabledata['primary']] += $idChangelog[$tabledata['primary']];
        }
    }
    if (isset($tabledata['default'])) {
        foreach ($tabledata['default'] as $defaultfield => $defaultvalue) {
            $record[$defaultfield] = $defaultvalue;
        }
    }
    if (isset($tabledata['association'])) {
        foreach ($tabledata['association'] as $ass) {
            $index_search = array_search($ass['data'], array_column($data, 'data'));
            if (!$data[$index_search]['migrate']) {
                $record[$ass['field']] = $ass['defaultvalue'];
            }
        }
    }
    if (array_key_exists('default_on', $record) && is_null($record['default_on'])) {
        unset($record['default_on']);
    }
    if (array_key_exists('cover', $record) && is_null($record['cover'])) {
        unset($record['cover']);
    }
    if (isset($record['id_shop'])) {
        $record['id_shop'] = $id_shop;
    }
    if (isset($record['id_shop_default'])) {
        $record['id_shop_default'] = $id_shop;
    }
    if (isset($record['id_shop_group'])) {
        $record['id_shop_group'] = $id_shop_group;
    }
    if (isset($field_remove[$tablename])) {
        foreach ($field_remove[$tablename] as $field) {
            unset($record[$field]);
        }
    }
    if (isset($field_update[$tablename])) {
        foreach ($field_update[$tablename] as $field => $value) {
            if ($record[$field] == $value['old']) {
                if ($value['new'] == null) {
                    unset($record[$field]);
                } else {
                    $record[$field] = $value['new'];
                }
            }
        }
    }
    if (strpos($tablename, 'lang') !== false) {
        $record['id_lang'] = $langs[$record['id_lang']];
        if (count($missLangs > 0) && $record['id_lang'] == $langDefault) {
            foreach ($missLangs as $l) {
                $langRecord = $record;
                $langRecord['id_lang'] = $l['id_lang'];
                $db->insert($tablename, escape($langRecord), true);
            }
        }
    }
    if ($tablename == 'stock_available') {
        $shopgroup = new ShopGroup($id_shop_group);
        if ($shopgroup->share_stock) {
            $record['id_shop'] = 0;
        } else {
            $record['id_shop_group'] = 0;
        }
    }
    if ($tablename == 'category') {
        $range = $db->getHomeRange();
        if ($record['level_depth'] == 2) {
            $record['id_parent'] = Configuration::get('PS_HOME_CATEGORY');
        }
        if ($record['nleft'] < $range['nleft']) {
            $record['nleft'] = $range['nleft'];
        }
        if ($record['nright'] > $range['nright']) {
            $record['nright'] = $range['nright'];
        }
    }
    if ($tablename == 'category_product') {
        if ($record['id_category'] == $db->getConfiguration('PS_HOME_CATEGORY')+$idChangelog['id_category']) {
            $record['id_category'] = Configuration::get('PS_HOME_CATEGORY');
        }
    }
    if ($tablename == 'product' || $tablename == 'product_shop') {
        if ($record['id_category_default'] == $db->getConfiguration('PS_HOME_CATEGORY')+$idChangelog['id_category']) {
            $record['id_category_default'] = Configuration::get('PS_HOME_CATEGORY');
        }
    }
    if ($tablename == 'image') {
        $str = str_split($record['id_image']);
        if (isset($src_image)) {
            $src_path = str_split($src_image);
        } else {
            $src_image = $record['id_image'];
            $src_path = $str;
        }
        $productImgDir = _PS_IMG_DIR_.'p/'.implode('/', $str);
        // foreach ($str as $value) {
            // $productImgDir.=$value.'/';
            createDir($productImgDir);
        // }
        if (copy(
            'http://'.$old_shop_url.'img/p/'.implode('/', $src_path).'/'.$src_image.'.jpg',
            _PS_IMG_DIR_.'p/'.implode('/', $str).'/'.$record['id_image'].'.jpg'
        )) {
            send_message(
                'IMAGE',
                'Copying image '.$tablename,
                $old_shop_url.'img/p/'.implode('/', $src_path).'/'.$src_image.'.jpg'
            );
            // send_message('IMAGE', $tablename, _PS_IMG_DIR_.'p/'.implode('/', $str).'/'.$record['id_image'].'.jpg');
        } else {
            send_message('error', $tablename, "error when copying image {$record['id_image']}");
        }
        unset($src_image);
    }
    // if ($tablename == 'lang') {
    //     $record['locale'] = Language::getLocaleByIso($record['iso_code']);
    // }
    $res = $db->insert($tablename, escape($record), true);

    if (!$res['status']) {
        send_message('error', $tablename, $res['message']);
    } else {
        send_message('insert', $tablename, $key+$offset+1);
    }
}
send_message('ENDPROCESS', 'end process', Shop::getContextShopID(true), 10);
