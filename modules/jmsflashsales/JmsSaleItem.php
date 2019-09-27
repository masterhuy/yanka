<?php
/**
* 2007-2016 PrestaShop
*
* Jms FlashSales
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2016 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsSaleItem extends ObjectModel
{
	public $product_id;	
	public $category_id;
	public $ordering;	
	public $active;		

	public static $definition = array(
		'table' => 'jmsflashsales_items',
		'primary' => 'item_id',
		'multilang' => false,
		'fields' => array(																
			'product_id' =>		array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),									
			'category_id' =>	array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),									
			'active' =>			array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
			'ordering' =>		array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),	
		)
	);

	public	function __construct($item_id = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($item_id, $id_lang, $id_shop);
	}
	
	public function add($autodate = true, $null_values = false)
	{
		$res = true;
		$context = Context::getContext();
		$id_shop = $context->shop->id;
		
		$res = parent::add($autodate, $null_values);
		$res &= Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'jmsflashsales` (`item_id`,`id_shop` )
			VALUES('.(int)$this->id.','.(int)$id_shop.')'
		);
		
		return $res;
	}
	public function delete()
	{
		$res = true;			
		
		$res &= Db::getInstance()->execute('
			DELETE FROM `'._DB_PREFIX_.'jmsflashsales`
			WHERE `item_id` = '.(int)$this->id
		);
		$res &= parent::delete();
		return $res;
	}
}
