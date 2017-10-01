<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_subcategory_size".
 *
 * @property integer $subcategory_size_id
 * @property integer $sub_category_id
 * @property integer $size_id
 * @property integer $vendor_id
 */
class ShopxieSubcategorySize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_subcategory_size';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_category_id', 'size_id', 'vendor_id'], 'required'],
            [['sub_category_id', 'size_id', 'vendor_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subcategory_size_id' => 'Subcategory Size ID',
            'sub_category_id' => 'Sub Category ID',
            'size_id' => 'Size ID',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
