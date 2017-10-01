<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_sales_return_items_taxes".
 *
 * @property integer $sale_id
 * @property integer $item_id
 * @property integer $line
 * @property string $name
 * @property string $percent
 * @property integer $vendor_id
 * @property integer $store_id
 */
class ShopxieSalesReturnItemsTaxes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_sales_return_items_taxes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_id', 'item_id', 'line', 'name', 'percent', 'vendor_id'], 'required'],
            [['sale_id', 'item_id', 'line', 'vendor_id', 'store_id'], 'integer'],
            [['percent'], 'number'],
            [['name'], 'string', 'max' => 255],
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
            'line' => 'Line',
            'name' => 'Name',
            'percent' => 'Percent',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
        ];
    }
}
