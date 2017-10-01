<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_item_kits".
 *
 * @property integer $item_kit_id
 * @property string $name
 * @property string $description
 * @property integer $vendor_id
 */
class ShopxieItemKits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_item_kits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'vendor_id'], 'required'],
            [['vendor_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_kit_id' => 'Item Kit ID',
            'name' => 'Name',
            'description' => 'Description',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
