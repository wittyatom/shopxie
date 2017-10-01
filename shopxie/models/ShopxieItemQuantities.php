<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_item_quantities".
 *
 * @property integer $quantity_id
 * @property integer $item_id
 * @property integer $location_id
 * @property integer $quantity
 * @property double $purchase_price
 * @property double $mrp
 * @property double $discount
 * @property double $selling_price
 * @property string $size
 * @property integer $vendor_id
 */
class ShopxieItemQuantities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_item_quantities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'location_id', 'size', 'vendor_id'], 'required'],
            [['item_id', 'location_id', 'quantity', 'vendor_id'], 'integer'],
            [['purchase_price', 'mrp', 'discount', 'selling_price'], 'number'],
            [['size'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'quantity_id' => 'Quantity ID',
            'item_id' => 'Item ID',
            'location_id' => 'Location ID',
            'quantity' => 'Quantity',
            'purchase_price' => 'Purchase Price',
            'mrp' => 'Mrp',
            'discount' => 'Discount',
            'selling_price' => 'Selling Price',
            'size' => 'Size',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
