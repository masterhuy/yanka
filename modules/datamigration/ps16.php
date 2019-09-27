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

class Ps16 extends JmsData
{
    public $table;
    public $field_remove;
    public function __construct()
    {
        parent::__construct();
        $this->table = array(
            'product' => array(
                array('tablename' => 'product',
                    'join' => array(
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product',
                        ),
                    ),
                    'association' => array(
                        array(
                            'data' => 'supplier',
                            'field' => 'id_supplier',
                            'defaultvalue' => 0,
                        ),
                        array(
                            'data' => 'manufacturer',
                            'field' => 'id_manufacturer',
                            'defaultvalue' => 0,
                        ),
                        array(
                            'data' => 'tax',
                            'field' => 'id_tax_rules_group',
                            'defaultvalue' => 0,
                        ),
                        array(
                            'data' => 'category',
                            'field' => 'id_category_default',
                            'defaultvalue' => Configuration::get('PS_HOME_CATEGORY'),
                        )

                    ),
                    'primary' => 'id_product',
                    'FK' => array(
                        'id_supplier',
                        'id_manufacturer',
                        'id_tax_rules_group',
                        array('FK' => 'id_category_default', 'PK' => 'id_category')
                    ),
                    'shop' => true,
                ),
                // array('tablename' => 'product_attachment',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_product',
                //         'id_attachment',
                //     )
                // ),
                // array('tablename' => 'attachment',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_attachment',
                //             'on' => 'id_attachment',
                //         ),
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'primary' => 'id_attachment'
                // ),
                // array('tablename' => 'attachment_lang',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_attachment',
                //             'on' => 'id_attachment',
                //         ),
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_attachment',
                //     )
                // ),
                array('tablename' => 'product_attribute',
                    'join' => array(
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product',
                        ),
                    ),
                    'shop' => true,
                    "primary" => 'id_product_attribute',
                    'FK' => array(
                        'id_product'
                    )
                ),
                array('tablename' => 'attribute',
                    'join' => array(
                        array(
                            'tablename' => 'attribute_shop',
                            'on' => 'id_attribute',
                        ),
                    ),
                    'shop' => true,
                    'primary' => 'id_attribute',
                    'FK' => array(
                        'id_attribute_group'
                    )
                ),
                array('tablename' => 'attribute_group',
                    'join' => array(
                        array(
                            'tablename' => 'attribute_group_shop',
                            'on' => 'id_attribute_group',
                        ),
                    ),
                    'shop' => true,
                    'primary' => 'id_attribute_group'
                ),
                array('tablename' => 'attribute_group_lang',
                    'join' => array(
                        array(
                            'tablename' => 'attribute_group_shop',
                            'on' => 'id_attribute_group',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_attribute_group'
                    )
                ),
                array(
                    'tablename' => 'attribute_group_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_attribute_group'
                    )
                ),
                array(
                    'tablename' => 'stock_available',
                    'shop' => true,
                    'primary' => 'id_stock_available',
                    'FK' => array(
                        'id_product',
                        array('FK' => 'id_product_attribute', 'PK' => 'id_product_attribute'),
                    )
                ),
                // array('tablename' => 'attribute_impact',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'primary' => 'id_attribute_impact',
                //     'FK' => array(
                //         'id_product',
                //         'id_attribute'
                //     )
                // ),
                array('tablename' => 'attribute_lang',
                    'join' => array(
                        array(
                            'tablename' => 'attribute_shop',
                            'on' => 'id_attribute',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_attribute'
                    )
                ),
                array(
                    'tablename' => 'attribute_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_attribute'
                    )
                ),
                array('tablename' => 'product_attribute_combination',
                    'join' => array(
                        array(
                            'tablename' => 'product_attribute_shop',
                            'on' => 'id_product_attribute',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_attribute',
                        'id_product_attribute'
                    )
                ),
                array('tablename' => 'product_attribute_image',
                    'join' => array(
                        array(
                            'tablename' => 'product_attribute_shop',
                            'on' => 'id_product_attribute',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_image',
                        'id_product_attribute'
                    )
                ),
                array('tablename' => 'image',
                    'join' => array(
                        array(
                            'tablename' => 'image_shop',
                            'on' => 'id_image',
                        ),
                    ),
                    'shop' => true,
                    'primary' => 'id_image',
                    'FK' => array(
                        'id_product',
                    )
                ),
                array('tablename' => 'image_lang',
                    'join' => array(
                        array(
                            'tablename' => 'image_shop',
                            'on' => 'id_image',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_image'
                    )
                ),
                array(
                    'tablename' => 'image_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_image',
                        'id_product'
                    ),

                ),
                array(
                    'tablename' => 'image_type',
                ),
                array(
                    'tablename' => 'product_attribute_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_product_attribute',
                        'id_product'
                    )
                ),
                // array(
                //     'tablename' => 'product_carrier',
                //     'shop' => true,
                //     'primary' => 'id_carrier_reference',
                //     'FK' => array(
                //         'id_product'
                //     )
                // ),
                // array('tablename' => 'product_country_tax',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_product',
                //         'id_country',
                //         'id_tax',
                //     )
                // ),
                // array('tablename' => 'product_download',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'primary' => 'id_product_download',
                //     'FK' => array(
                //         'id_product',
                //     )
                // ),
                // array('tablename' => 'product_group_reduction_cache',
                //     'join' => array(
                //         array(
                //             'tablename' => 'product_shop',
                //             'on' => 'id_product',
                //         ),
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_product',
                //         // 'id_group'
                //     )
                // ),
                // array('tablename' => 'group',
                //     'join' => array(
                //         array(
                //             'tablename' => 'group_shop',
                //             'on' => 'id_group',
                //         ),
                //     ),
                //     'primary' => 'id_group'
                // ),
                // array('tablename' => 'group_lang',
                //     'join' => array(
                //         array(
                //             'tablename' => 'group_shop',
                //             'on' => 'id_group',
                //         ),
                //     ),
                //     'FK' => array(
                //         'id_group',
                //     )
                // ),
                // array('tablename' => 'group_reduction',
                //     'join' => array(
                //         array(
                //             'tablename' => 'group_shop',
                //             'on' => 'id_group',
                //         ),
                //     ),
                //     'primary' => 'id_group_reduction',
                //     'FK' => array(
                //         'id_group',
                //         'id_category'
                //     )
                // ),
                // array(
                //     'tablename' => 'group_shop',
                //     'FK' => array(
                //         'id_group',
                //     )
                // ),
                array(
                    'tablename' => 'product_lang',
                    'shop' => true,
                    'FK' => array(
                        'id_product',
                    )
                ),
                array('tablename' => 'product_sale',
                    'join' => array(
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_product',
                    )
                ),
                array('tablename' => 'product_supplier',
                    'join' => array(
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product',
                        ),
                    ),
                    'shop' => true,
                    'primary' => 'id_product_supplier',
                    'FK' => array(
                        'id_product_attribute',
                        'id_product',
                        'id_supplier',
                        'id_currency'
                    )
                ),
                array('tablename' => 'product_tag',
                    'join' => array(
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product',
                        ),
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_product',
                        'id_tag',
                    )
                ),
                array('tablename' => 'tag',
                    'join' => array(
                        array(
                            'tablename' => 'product_tag',
                            'on' => 'id_Tag',
                        ),
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product',
                        ),
                    ),
                    'shop' => true,
                    'primary' => 'id_tag',
                ),
                array(
                    'tablename' => 'tag_count',
                    'shop' => true,
                    'FK' => array(
                        // 'id_group',
                        'id_tag'
                    )
                ),
                array(
                    'tablename' => 'product_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_product',
                        array('FK' => 'id_category_default', 'PK' => 'id_category')
                    ),
                    'association' => array(
                        array(
                            'data' => 'tax',
                            'field' => 'id_tax_rules_group',
                            'defaultvalue' => 0,
                        ),
                        array(
                            'data' => 'category',
                            'field' => 'id_category_default',
                            'defaultvalue' => Configuration::get('PS_HOME_CATEGORY'),
                        )

                    ),
                ),
                array(
                    'tablename' => 'category_product',
                    'join' => array(
                        array(
                            'tablename' => 'product_shop',
                            'on' => 'id_product'
                        )
                    ),
                    'FK' => array(
                        'id_category',
                        'id_product'
                    ),
                    'where' => Configuration::get('JDM_CATE')?'':'a.id_category = '.
                    $this->getConfiguration('PS_HOME_CATEGORY'),
                    'shop' => true,
                ),
            ),
            // 'localization' => array(
            //     // array(
            //     //     'tablename' => 'state',
            //     //     'nowhere' => true,
            //     // ),
            //     array(
            //         'tablename' => 'lang',
            //         'join' => array(
            //             array(
            //                 'tablename' => 'lang_shop',
            //                 'on' => 'id_lang'
            //             )
            //         ),
            //     ),
            //     array(
            //         'tablename' => 'lang_shop'
            //     ),
            //     array(
            //         'tablename' => 'country',
            //         'join' => array(
            //             array(
            //                 'tablename' => 'country_shop',
            //                 'on' => 'id_country'
            //             )
            //         )
            //     ),
            //     array(
            //         'tablename' => 'country_lang',
            //         'join' => array(
            //             array(
            //                 'tablename' => 'country_shop',
            //                 'on' => 'id_country'
            //             )
            //         )
            //     ),
            //     array(
            //         'tablename' => 'country_shop',
            //     )
            // ),
            'currency' => array(
                array(
                    'tablename' => 'currency',
                    'join' => array(
                        array(
                            'tablename' => 'currency_shop',
                            'on' => 'id_currency'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_currency'
                ),
                array(
                    'tablename' => 'currency_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_currency'
                    )
                )
            ),
            'category' => array(
                array(
                    'tablename' => 'category',
                    'join' => array(
                        array(
                            'tablename' => 'category_shop',
                            'on' => 'id_category'
                        )
                    ),
                    'where' => 'level_depth > 1',
                    'cleanwhere' => 'level_depth > 1',
                    'shop' => true,
                    'primary' => 'id_category',
                    'FK' => array(
                        array('FK' => 'id_parent', 'PK' => 'id_category')
                    )

                ),
                array(
                    'tablename' => 'category_group',
                    'join' => array(
                        array(
                            'tablename' => 'category',
                            'on' => 'id_category'
                        ),
                        array(
                            'tablename' => 'category_shop',
                            'on' => 'id_category'
                        )
                    ),
                    'default' => array('id_group' => 1),
                    'where' => 'level_depth > 1',
                    'cleanwhere' => 'b.id_category IS NULL',
                    'shop' => true,
                    'FK' => array(
                        'id_category',
                        // 'id_group'
                    )
                ),
                array(
                    'tablename' => 'category_lang',
                    'join2' => array(
                        array(
                            'join' => 'LEFT JOIN',
                            'alias' => 'cat',
                            'tablename' => 'category',
                            'on1' => 'id_category',
                            'on2' => 'id_category',
                        ),
                    ),
                    'where' => 'level_depth > 1',
                    'cleanwhere' => '(cat.id_category IS NULL OR level_depth > 1)',
                    'shop' => true,
                    'FK' => array(
                        'id_category',
                    )
                ),
                array(
                    'tablename' => 'category_shop',
                    'join2' => array(
                        array(
                            'join' => 'LEFT JOIN',
                            'alias' => 'cat',
                            'tablename' => 'category',
                            'on1' => 'id_category',
                            'on2' => 'id_category',
                        ),
                    ),
                    'where' => 'level_depth > 1',
                    'cleanwhere' => '(cat.id_category IS NULL OR level_depth > 1)',
                    'shop' => true,
                    'FK' => array(
                        'id_category',
                    )
                ),
            ),
            'manufacturer' => array(
                array(
                    'tablename' => 'manufacturer',
                    'join' => array(
                        array(
                            'tablename' => 'manufacturer_shop',
                            'on' => 'id_manufacturer'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_manufacturer'
                ),
                array(
                    'tablename' => 'manufacturer_lang',
                    'join' => array(
                        array(
                            'tablename' => 'manufacturer_shop',
                            'on' => 'id_manufacturer'
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_manufacturer'
                    )
                ),
                array(
                    'tablename' => 'manufacturer_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_manufacturer'
                    )
                ),
            ),
            'supplier' => array(
                array(
                    'tablename' => 'supplier',
                    'join' => array(
                        array(
                            'tablename' => 'supplier_shop',
                            'on' => 'id_supplier'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_supplier'
                ),
                array(
                    'tablename' => 'supplier_lang',
                    'join' => array(
                        array(
                            'tablename' => 'supplier_shop',
                            'on' => 'id_supplier'
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_supplier'
                    )
                ),
                array(
                    'tablename' => 'supplier_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_supplier'
                    )
                ),
            ),
            'carrier' => array(
                array(
                    'tablename' => 'carrier',
                    'join' => array(
                        array(
                            'tablename' => 'carrier_shop',
                            'on' => 'id_carrier'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_carrier',
                    'FK' => array(
                        'id_tax_rules_group'
                    ),
                    'association' => array(
                        array(
                            'data' => 'tax',
                            'field' => 'id_tax_rules_group',
                            'defaultvalue' => 0,
                        ),
                    ),
                ),
                array(
                    'tablename' => 'carrier_group',
                    'join' => array(
                        array(
                            'tablename' => 'carrier_shop',
                            'on' => 'id_carrier'
                        )
                    ),
                    'default' => array('id_group' => 1),
                    'shop' => true,
                    'FK' => array(
                        'id_carrier',
                    )
                ),
                array(
                    'tablename' => 'carrier_lang',
                    'shop' => true,
                    'FK' => array(
                        'id_carrier'
                    )
                ),
                array(
                    'tablename' => 'carrier_tax_rules_group_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_carrier',
                        'id_tax_rules_group'
                    ),
                    'association' => array(
                        array(
                            'data' => 'tax',
                            'field' => 'id_tax_rules_group',
                            'defaultvalue' => 0,
                        ),
                    ),
                ),
                array(
                    'tablename' => 'carrier_zone',
                    'join' => array(
                        array(
                            'tablename' => 'carrier_shop',
                            'on' => 'id_carrier'
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_carrier'
                    )
                ),
                array(
                    'tablename' => 'carrier_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_carrier'
                    )
                ),
            ),
            'tax' => array(
                array(
                    'tablename' => 'tax',
                    'primary' => 'id_tax'
                ),
                array(
                    'tablename' => 'tax_lang',
                    'FK' => array(
                        'id_tax'
                    )
                ),
                array(
                    'tablename' => 'tax_rule',
                    'primary' => 'id_tax_rule',
                    'FK' => array(
                        'id_tax',
                        'id_tax_rules_group'
                    )
                ),
                array(
                    'tablename' => 'tax_rules_group',
                    'join' => array(
                        array(
                            'tablename' => 'tax_rules_group_shop',
                            'on' => 'id_tax_rules_group'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_tax_rules_group'
                ),
                array(
                    'tablename' => 'tax_rules_group_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_tax_rules_group'
                    )
                ),
            ),
            'employee' => array(
                array(
                    'tablename' => 'employee',
                    'join' => array(
                        array(
                            'tablename' => 'employee_shop',
                            'on' => 'id_employee',
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_employee',
                ),
                array(
                    'tablename' => 'employee_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_employee'
                    )
                ),
            ),
            'customer' => array(
                array(
                    'tablename' =>'customer',
                    'shop' => true,
                    'primary' => 'id_customer',
                    'default' => array('id_default_group' => 3),
                ),
                array(
                    'tablename' =>'gender',
                ),
                array(
                    'tablename' =>'gender_lang',
                ),
                array(
                    'tablename' =>'risk',
                ),
                array(
                    'tablename' =>'risk_lang',
                ),
                array(
                    'tablename' =>'customer_group',
                    'join' => array(
                        array(
                            'tablename' => 'customer',
                            'on' => 'id_customer',
                        )
                    ),
                    'default' => array('id_group' => 3),
                    'shop' => true,
                    "FK" => array(
                        'id_customer',
                    )
                ),
                // array(
                //     'tablename' =>'customer_thread',
                //     'shop' => true,
                //     'primary' => 'id_customer_thread',
                //     'FK' => array(
                //         'id_contact',
                //         'id_customer',
                //         'id_product'
                //     )
                // ),
                // array(
                //     'tablename' =>'contact',
                //     'join' => array(
                //         array(
                //             'tablename' => 'contact_shop',
                //             'on' => 'id_contact',
                //         )
                //     ),
                //     'shop' => true,
                //     'primary' => 'id_contact'
                // ),
                // array(
                //     'tablename' =>'contact_lang',
                //     'join' => array(
                //         array(
                //             'tablename' => 'contact_shop',
                //             'on' => 'id_contact',
                //         )
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_contact'
                //     )
                // ),
                // array(
                //     'tablename' =>'contact_shop',
                //     'shop' => true,
                //     'FK' => array(
                //         'id_contact'
                //     )
                // ),
            ),
            'cart' => array(
                array(
                    'tablename' => 'cart',
                    'shop' => true,
                    'primary' => 'id_cart',
                    'FK' => array(
                        // 'id_contact',
                        'id_carrier',
                        'id_currency',
                        'id_customer'
                    ),
                    'association' => array(
                        array(
                            'data' => 'carrier',
                            'field' => 'id_carrier',
                            'defaultvalue' => 0,
                        ),
                        array(
                            'data' => 'currency',
                            'field' => 'id_currency',
                            'defaultvalue' => Configuration::get('PS_CURRENCY_DEFAULT'),
                        ),
                    ),
                ),
                array(
                    'tablename' => 'cart_product',
                    'shop' => true,
                    'FK' => array(
                        'id_cart',
                        'id_product',
                        'id_product_attribute'
                    )
                ),
                // array(
                //     'tablename' => 'cart_rule',
                //     'join' => array(
                //         array(
                //             'tablename' => 'cart_rule_shop',
                //             'on' => 'id_cart_rule'
                //         )
                //     ),
                //     'shop' => true,
                //     'primary' => 'id_cart_rule',
                //     'FK' => array(
                //         'id_customer'
                //     )
                // ),
                // array(
                //     'tablename' => 'cart_cart_rule',
                //     'join' => array(
                //         array(
                //             'tablename' => 'cart',
                //             'on' => 'id_cart'
                //         )
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_cart',
                //         'id_cart_rule'
                //     )
                // ),
                // array(
                //     'tablename' => 'cart_rule_carrier',
                //     'join' => array(
                //         array(
                //             'tablename' => 'cart_rule_shop',
                //             'on' => 'id_cart_rule'
                //         )
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_carrier',
                //         'id_cart_rule'
                //     )
                // ),
                // array(
                //     'tablename' => 'cart_rule_country',
                //     'join' => array(
                //         array(
                //             'tablename' => 'cart_rule_shop',
                //             'on' => 'id_cart_rule'
                //         )
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_cart_rule'
                //     )
                // ),
                // array(
                //     'tablename' => 'cart_rule_group',
                //     'join' => array(
                //         array(
                //             'tablename' => 'cart_rule_shop',
                //             'on' => 'id_cart_rule'
                //         )
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         // 'id_group',
                //         'id_cart_rule'
                //     )
                // ),
                // array(
                //     'tablename' => 'cart_rule_lang',
                //     'join' => array(
                //         array(
                //             'tablename' => 'cart_rule_shop',
                //             'on' => 'id_cart_rule'
                //         )
                //     ),
                //     'shop' => true,
                //     'FK' => array(
                //         'id_cart_rule'
                //     )
                // ),
                // array(
                //     'tablename' => 'cart_rule_shop',
                //     'shop' => true,
                //     'FK' => array(
                //         'id_cart_rule'
                //     )
                // ),
            ),
            'order' => array(
                array(
                    'tablename' => 'orders',
                    'shop' => true,
                    'primary' => 'id_order',
                    'FK' => array(
                        'id_carrier',
                        'id_customer',
                        'id_cart',
                        'id_currency'
                    )
                ),
                array(
                    'tablename' => 'order_carrier',
                    'join' => array(
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_order_carrier',
                    'FK' => array(
                        'id_carrier',
                        'id_order_invoice',
                        'id_order'
                    )
                ),
                // array(
                //     'tablename' => 'order_cart_rule',
                //     'join' => array(
                //         array(
                //             'tablename' => 'orders',
                //             'on' => 'id_order',
                //         )
                //     ),
                //     'shop' => true,
                //     'primary' => 'id_order_cart_rule',
                //     'FK' => array(
                //         'id_cart_rule',
                //         'id_order_invoice'
                //     )
                // ),
                array(
                    'tablename' => 'order_detail',
                    'shop' => true,
                    'primary' => 'id_order_detail',
                    'FK' => array(
                        'id_order_invoice',
                        'id_order',
                        array('FK' => 'product_id', 'PK' => 'id_product'),
                        array('FK' => 'product_attribute_id', 'PK' => 'id_product_attribute'),
                    )
                ),
                array(
                    'tablename' => 'order_detail_tax',
                    'join' => array(
                        array(
                            'tablename' => 'order_detail',
                            'on' => 'id_order_detail',
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_order_detail',
                        'id_tax'
                    )
                ),
                array(
                    'tablename' => 'order_history',
                    'join' => array(
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_order_history',
                    'FK' => array(
                        'id_order',
                        'id_order_state',
                        'id_employee'
                    )
                ),
                array(
                    'tablename' => 'order_invoice',
                    'join' => array(
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_order_invoice'
                ),
                array(
                    'tablename' => 'order_invoice_payment',
                    'join' => array(
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_order_invoice',
                        'id_order_payment'
                    )
                ),
                array(
                    'tablename' => 'order_invoice_tax',
                    'join' => array(
                        array(
                            'tablename' => 'order_invoice',
                            'on' => 'id_order_invoice',
                        ),
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_order_invoice',
                        'id_tax'
                    )
                ),
                array(
                    'tablename' => 'order_message',
                    'primary' => 'id_order_message',
                ),
                array(
                    'tablename' => 'order_message_lang',
                    'FK' => array(
                        'id_order_message',
                    )
                ),
                array(
                    'tablename' => 'order_payment',
                    'FK' => array(
                        'id_currency'
                    )
                ),
                array(
                    'tablename' => 'order_return',
                    'join' => array(
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_order_return',
                    'FK' => array(
                        'id_customer'
                    )
                ),
                array(
                    'tablename' => 'order_return_detail',
                    'join' => array(
                        array(
                            'tablename' => 'order_return',
                            'on' => 'id_order_return',
                        ),
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_order_return',
                        'id_order_detail'
                    )
                ),
                array(
                    'tablename' => 'order_return_state',
                ),
                array(
                    'tablename' => 'order_return_state_lang',
                ),
                array(
                    'tablename' => 'order_slip',
                    'join' => array(
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_order_slip',
                    'FK' => array(
                        'id_customer'
                    )
                ),
                array(
                    'tablename' => 'order_slip_detail',
                    'join' => array(
                        array(
                            'tablename' => 'order_slip',
                            'on' => 'id_order_slip',
                        ),
                        array(
                            'tablename' => 'orders',
                            'on' => 'id_order',
                        )
                    ),
                    'shop' => true,
                    'FK' => array(
                        'id_order_slip',
                        'id_order_detail'
                    )
                ),
                array(
                    'tablename' => 'order_slip_detail_tax',
                ),
                array(
                    'tablename' => 'order_state',
                ),
                array(
                    'tablename' => 'order_state_lang',
                ),
                array(
                    'tablename' => 'supply_order',
                    'join' => array(
                        array(
                            'tablename' => 'supplier_shop',
                            'on' => 'id_supplier',
                        )
                    ),
                    'shop' => true,
                ),
                array(
                    'tablename' => 'supply_order_detail',
                    'join' => array(
                        array(
                            'tablename' => 'supply_order',
                            'on' => 'id_supply_order',
                        ),
                        array(
                            'tablename' => 'supplier_shop',
                            'on' => 'id_supplier',
                        )
                    ),
                    'shop' => true,
                ),
                array(
                    'tablename' => 'supply_order_history',
                    'shop' => true,
                    'join' => array(
                        array(
                            'tablename' => 'supply_order',
                            'on' => 'id_supply_order',
                        ),
                        array(
                            'tablename' => 'supplier_shop',
                            'on' => 'id_supplier',
                        )
                    )
                ),
                array(
                    'tablename' => 'supply_order_receipt_history',
                    'shop' => true,
                    'join' => array(
                        array(
                            'tablename' => 'supply_order_detail',
                            'on' => 'id_supply_order_detail',
                        ),
                        array(
                            'tablename' => 'supply_order',
                            'on' => 'id_supply_order',
                        ),
                        array(
                            'tablename' => 'supplier_shop',
                            'on' => 'id_supplier',
                        )
                    )
                ),
                array(
                    'tablename' => 'supply_order_state',
                ),
                array(
                    'tablename' => 'supply_order_state_lang',
                ),
            ),
            'cms' => array(
                array(
                    'tablename' => 'cms',
                    'join' => array(
                        array(
                            'tablename' => 'cms_shop',
                            'on' => 'id_cms'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_cms',
                    'FK' => array(
                        'id_cms_category'
                    )
                ),
                array(
                    'tablename' => 'cms_category',
                    'join' => array(
                        array(
                            'tablename' => 'cms_category_shop',
                            'on' => 'id_cms_category'
                        )
                    ),
                    'shop' => true,
                    'primary' => 'id_cms_category'
                ),
                array(
                    'tablename' => 'cms_category_lang',
                    'shop' => true,
                    'FK' => array(
                        'id_cms_category'
                    )
                ),
                array(
                    'tablename' => 'cms_category_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_cms_category'
                    )
                ),
                array(
                    'tablename' => 'cms_lang',
                    'shop' => true,
                    'FK' => array(
                        'id_cms'
                    )
                ),
                array(
                    'tablename' => 'cms_role',
                    'shop' => true,
                    'join' => array(
                        array(
                            'tablename' => 'cms_shop',
                            'on' => 'id_cms'
                        )
                    )
                ),
                array(
                    'tablename' => 'cms_role_lang',
                    'shop' => true,
                ),
                array(
                    'tablename' => 'cms_shop',
                    'shop' => true,
                    'FK' => array(
                        'id_cms'
                    )
                ),
                // array(
                //     'tablename' => 'link_block',
                //     'nowhere' => true,
                // ),
                // array(
                //     'tablename' => 'link_block_lang',
                //     'nowhere' => true,
                // ),
                // array(
                //     'tablename' => 'link_block_shop',
                // ),
            ),
            'seo' => array(
                // array(
                //     'tablename' => 'search_index',
                //     'join' => array(
                //         array(
                //             'tablename' => 'search_word',
                //             'on' => 'id_word',
                //         )
                //     )
                // ),
                // array(
                //     'tablename' => 'search_word',
                // ),
            )

        );
        $this->field_remove = array(
            'product' => array(
                'id_product_redirected',
            ),
            'product_shop' => array(
                'id_product_redirected',
            ),
            'shop' => array(
                'id_theme',
            ),
            'image_type' => array(
                'scenes',
            ),
            'currency' => array(
                'iso_code_num',
                'sign',
                'blank',
                'format',
                'decimals',
            )
        );
    }
}
