<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_sales_suspended_items".
 *
 * @property integer $sale_id
 * @property integer $item_id
 * @property string $description
 * @property string $serialnumber
 * @property integer $line
 * @property string $quantity_purchased
 * @property string $item_cost_price
 * @property string $item_unit_price
 * @property string $discount_percent
 * @property integer $item_location
 * @property integer $vendor_id
 */
class ShopxieSalesSuspendedItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_sales_suspended_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_id', 'item_id', 'line', 'item_cost_price', 'item_unit_price', 'item_location', 'vendor_id'], 'required'],
            [['sale_id', 'item_id', 'line', 'item_location', 'vendor_id'], 'integer'],
            [['quantity_purchased', 'item_cost_price', 'item_unit_price', 'discount_percent'], 'number'],
            [['description', 'serialnumber'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sale_id' => 'Sale ID',
            'item_id' => 'Item ID',
            'description' => 'Description',
            'serialnumber' => 'Serialnumber',
            'line' => 'Line',
            'quantity_purchased' => 'Quantity Purchased',
            'item_cost_price' => 'Item Cost Price',
            'item_unit_price' => 'Item Unit Price',
            'discount_percent' => 'Discount Percent',
            'item_location' => 'Item Location',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
