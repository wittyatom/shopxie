<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_items".
 *
 * @property string $name
 * @property string $category
 * @property integer $supplier_id
 * @property string $item_number
 * @property string $description
 * @property string $cost_price
 * @property string $unit_price
 * @property string $reorder_level
 * @property integer $receiving_quantity
 * @property integer $item_id
 * @property integer $pic_id
 * @property integer $allow_alt_description
 * @property integer $is_serialized
 * @property integer $deleted
 * @property integer $brand_id
 * @property integer $parent_id
 * @property integer $category_id
 * @property integer $subcategory_id
 * @property integer $item_color
 * @property string $custom5
 * @property string $custom6
 * @property string $custom7
 * @property string $custom8
 * @property string $custom9
 * @property string $custom10
 * @property integer $vendor_id
 */
class ShopxieItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'description', 'cost_price', 'unit_price', 'allow_alt_description', 'is_serialized', 'custom5', 'custom6', 'custom7', 'custom8', 'custom9', 'custom10', 'vendor_id'], 'required'],
            [['supplier_id', 'receiving_quantity', 'pic_id', 'allow_alt_description', 'is_serialized', 'deleted', 'brand_id', 'parent_id', 'category_id', 'subcategory_id', 'item_color', 'vendor_id'], 'integer'],
            [['cost_price', 'unit_price', 'reorder_level'], 'number'],
            [['name', 'category', 'item_number', 'description'], 'string', 'max' => 255],
            [['custom5', 'custom6', 'custom7', 'custom8', 'custom9', 'custom10'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'category' => 'Category',
            'supplier_id' => 'Supplier ID',
            'item_number' => 'Item Number',
            'description' => 'Description',
            'cost_price' => 'Cost Price',
            'unit_price' => 'Unit Price',
            'reorder_level' => 'Reorder Level',
            'receiving_quantity' => 'Receiving Quantity',
            'item_id' => 'Item ID',
            'pic_id' => 'Pic ID',
            'allow_alt_description' => 'Allow Alt Description',
            'is_serialized' => 'Is Serialized',
            'deleted' => 'Deleted',
            'brand_id' => 'Brand ID',
            'parent_id' => 'Parent ID',
            'category_id' => 'Category ID',
            'subcategory_id' => 'Subcategory ID',
            'item_color' => 'Item Color',
            'custom5' => 'Custom5',
            'custom6' => 'Custom6',
            'custom7' => 'Custom7',
            'custom8' => 'Custom8',
            'custom9' => 'Custom9',
            'custom10' => 'Custom10',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
