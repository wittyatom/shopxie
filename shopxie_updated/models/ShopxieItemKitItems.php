<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_item_kit_items".
 *
 * @property integer $item_kit_id
 * @property integer $item_id
 * @property string $quantity
 * @property integer $vendor_id
 */
class ShopxieItemKitItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_item_kit_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_kit_id', 'item_id', 'quantity', 'vendor_id'], 'required'],
            [['item_kit_id', 'item_id', 'vendor_id'], 'integer'],
            [['quantity'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_kit_id' => 'Item Kit ID',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
