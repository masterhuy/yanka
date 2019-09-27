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

class JmsData
{
    protected $server;
    protected $db;
    protected $user;
    protected $pwd;
    protected $database;
    protected $prefix;
    public function __construct()
    {
        $dbClass = Db::getClass();
        $this->server = Configuration::get('JDM_SERVER');
        $this->user = Configuration::get('JDM_USER');
        $this->pwd = Configuration::get('JDM_PWD');
        $this->database = Configuration::get('JDM_DATABASE');
        $this->prefix = Configuration::get('JDM_PREFIX');
        $this->db = new $dbClass($this->server, $this->user, $this->pwd, $this->database);
        $this->targetDb = Db::getInstance();
    }
    public function countRecord($tabledata, $id_shop, $idlangs)
    {
        $alias = 'a';
        $aliasnext = 'b';
        $sql = "SELECT COUNT(*) FROM {$this->prefix}{$tabledata['tablename']} {$alias} ";
        if (isset($tabledata['join2'])) {
            foreach ($tabledata['join2'] as $value) {
                $sql .= "JOIN {$this->prefix}{$value['tablename']} {$value['alias']} ".
                "ON {$alias}.{$value['on1']} = {$value['alias']}.{$value['on2']} ";
            }
        }
        if (isset($tabledata['join'])) {
            foreach ($tabledata['join'] as $value) {
                $sql .= "LEFT JOIN {$this->prefix}{$value['tablename']} {$aliasnext} ".
                "ON {$alias}.{$value['on']} = {$aliasnext}.{$value['on']} ";
                $alias = $aliasnext;
                $aliasnext++;
            }
        }
        $cond = array();
        if (isset($tabledata['where']) && $tabledata['where'] != '') {
            $cond[] = $tabledata['where'];
        }
        if (isset($tabledata['shop'])) {
            $cond[] = "id_shop = {$id_shop}";
        }
        if (strpos($tabledata['tablename'], 'lang') !== false) {
            $cond[] = "id_lang IN {$idlangs}";
        }
        if (count($cond) > 0) {
            $sql .= "WHERE ". implode(' AND ', $cond);
        }
        return $this->db->getValue($sql);
    }
    public function clean($tabledata, $id_shop)
    {
        if ($id_shop == null) {
            $this->targetDb->execute("DELETE FROM "._DB_PREFIX_."{$tabledata['tablename']}");
            return;
        }
        $alias = 'a';
        $aliasnext = 'b';
        $sql = "DELETE {$alias}.* FROM "._DB_PREFIX_."{$tabledata['tablename']} {$alias} ";
        if (isset($tabledata['join2'])) {
            foreach ($tabledata['join2'] as $value) {
                $sql .= "{$value['join']} {$this->prefix}{$value['tablename']} {$value['alias']} ".
                "ON {$alias}.{$value['on1']} = {$value['alias']}.{$value['on2']} ";
            }
        }
        if (isset($tabledata['join'])) {
            foreach ($tabledata['join'] as $value) {
                $sql .= "LEFT JOIN "._DB_PREFIX_."{$value['tablename']} {$aliasnext} ".
                "ON {$alias}.{$value['on']} = {$aliasnext}.{$value['on']} ";
                $alias = $aliasnext;
                $aliasnext++;
            }
        }
        $cond = array();
        if (isset($tabledata['cleanwhere'])) {
            $cond[] = $tabledata['cleanwhere'];
        }
        if (isset($tabledata['shop'])) {
            if (isset($tabledata['join'])) {
                $value = end($tabledata['join']);
                $cond[] = "({$alias}.{$value['on']} IS NULL OR {$alias}.{$value['on']} NOT IN ".
                "(SELECT {$value['on']} FROM "._DB_PREFIX_."{$value['tablename']} WHERE id_shop <> {$id_shop}))";
            } else {
                $cond[] = "id_shop = {$id_shop}";
            }
        }
        if (count($cond) > 0) {
            $sql .= "WHERE ". implode(' AND ', $cond);
        }
        $this->targetDb->execute($sql);
        print_r($sql);
    }
    public function getAlls($tabledata, $offset, $id_shop, $idlangs, $join = false, $field = null, $on = null)
    {
        if ($join !== false) {
            $fieldadd = ", {$field}";
            $joinadd = "LEFT JOIN {$this->prefix}{$join} ON {$on} ";
        } else {
            $fieldadd = '';
            $joinadd = '';
        }
        $alias = 'a';
        $aliasnext = 'b';
        $sql = "SELECT {$alias}.*{$fieldadd} FROM {$this->prefix}{$tabledata['tablename']} {$alias} ";
        if (isset($tabledata['join2'])) {
            foreach ($tabledata['join2'] as $value) {
                $sql .= "JOIN {$this->prefix}{$value['tablename']} {$value['alias']} ".
                "ON {$alias}.{$value['on1']} = {$value['alias']}.{$value['on2']} ";
            }
        }
        if (isset($tabledata['join'])) {
            foreach ($tabledata['join'] as $value) {
                $sql .= "LEFT JOIN {$this->prefix}{$value['tablename']} {$aliasnext} ".
                "ON {$alias}.{$value['on']} = {$aliasnext}.{$value['on']} ";
                $alias = $aliasnext;
                $aliasnext++;
            }
        }
        $sql .= $joinadd;
        $cond = array();
        if (isset($tabledata['where']) && $tabledata['where'] != '') {
            $cond[] = $tabledata['where'];
        }
        if (isset($tabledata['shop'])) {
            $cond[] = "id_shop = {$id_shop}";
        }
        if (strpos($tabledata['tablename'], 'lang') !== false) {
            $cond[] = "id_lang IN {$idlangs}";
        }
        if (count($cond) > 0) {
            $sql .= "WHERE ". implode(' AND ', $cond);
        }
        $sql .= " LIMIT 50 OFFSET {$offset}";
        return $this->db->executeS($sql);
    }
    public function getAll($prefix, $table, $lang)
    {
        $sql = "SELECT * FROM {$prefix}{$table} t ";
        if ($lang) {
            $sql.= "LEFT JOIN {$prefix}{$table}_lang tl ON t.id_$table = tl.id_$table";
        }
        return $this->db->executeS($sql);
    }
    public function insert($table, $arr, $overwrite)
    {
        $res = array();
        $res['status'] = true;
        if ($overwrite) {
            $type = Db::ON_DUPLICATE_KEY;
        } else {
            $type = Db::INSERT;
        }
        try {
            $res['status'] = $this->targetDb->insert($table, $arr, false, true, $type);
        } catch (Exception $e) {
            $res['status'] = false;
            $res['message'] = $e->getMessage();
        }
        return $res;
    }
    public function getConfiguration($name)
    {
        return $this->db->getValue("SELECT value FROM {$this->prefix}configuration WHERE name = '{$name}'");
    }
    public function getOldShop($id_shop)
    {
        $sql = "SELECT domain, physical_uri FROM {$this->prefix}shop_url ".
        "WHERE id_shop={$id_shop} AND main =1 AND active=1";
        $res = $this->db->getRow($sql);
        return $res['domain'].$res['physical_uri'];
    }
    public function getSourceShops()
    {
        return $this->db->executeS("SELECT id_shop, name FROM {$this->prefix}shop");
    }
    public function getTargetShops()
    {
        return $this->targetDb->executeS("SELECT id_shop, name FROM "._DB_PREFIX_."shop");
    }
    public function getLanguages()
    {
        $rs = array();
        $languages = $this->db->executeS("SELECT id_lang, iso_code FROM {$this->prefix}lang");
        foreach ($languages as $lang) {
            $newid = $this->targetDb->getValue("SELECT id_lang FROM "._DB_PREFIX_.
                "lang WHERE iso_code = '{$lang['iso_code']}'");
            if ($newid !== false && $newid != null) {
                $rs[$lang['id_lang']] = $newid;
            }
        }
        return $rs;
    }
    public function getMissingLanguages($idlangs)
    {
        if (count($idlangs) == 0) {
            return false;
        }
        $ids = '('.implode(',', $idlangs).')';
        $sql = "SELECT id_lang FROM "._DB_PREFIX_."lang WHERE id_lang NOT IN {$ids}";
        return $this->targetDb->executeS($sql);
    }
    public function getIdChange($tabledata)
    {
        $a = (int)$this->db->getValue(
            "SELECT MIN({$tabledata['primary']}) FROM {$this->prefix}{$tabledata['tablename']}"
        );
        $b = (int)$this->targetDb->getValue(
            "SELECT MAX({$tabledata['primary']}) FROM "._DB_PREFIX_."{$tabledata['tablename']}"
        );
        return $b-$a+1;
    }
    public function updateCurrency($range, $id_shop)
    {
        $id_currency = $this->getConfiguration('PS_CURRENCY_DEFAULT');
        Configuration::updateValue('PS_CURRENCY_DEFAULT', $id_currency+$range, false, null, $id_shop);
    }
    public function getHomeRange()
    {
        return $this->targetDb->executeS(
            "SELECT nleft, nright FROM "._DB_PREFIX_."category WHERE id_category=".
            Configuration::get('PS_HOME_CATEGORY')
        );
    }
    public function setHomeRange($range)
    {
        $this->targetDb->executeS(
            "UPDATE "._DB_PREFIX_."category SET  nleft={$range['nleft']}, nright={$range['nright']} WHERE id_category="
            .Configuration::get('PS_HOME_CATEGORY')
        );
    }
    public function getImages($id_shop)
    {
        return $this->targetDb->executeS("SELECT id_image FROM "._DB_PREFIX_."image_shop WHERE id_shop={$id_shop}");
    }
}
