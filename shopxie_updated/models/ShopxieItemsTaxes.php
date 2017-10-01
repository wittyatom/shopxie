<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_items_taxes".
 *
 * @property integer $item_id
 * @property string $name
 * @property string $percent
 * @property integer $vendor_id
 */
class ShopxieItemsTaxes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_items_taxes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'name', 'percent', 'vendor_id'], 'required'],
            [['item_id', 'vendor_id'], 'integer'],
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
            'item_id' => 'Item ID',
            'name' => 'Name',
            'percent' => 'Percent',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
