<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_subcategory".
 *
 * @property integer $sub_category_id
 * @property string $sub_category_name
 * @property string $sub_category_display_name
 * @property integer $category_id
 * @property integer $sub_category_createdby
 * @property string $sub_category_createdat
 * @property integer $deleted
 * @property integer $vendor_id
 */
class ShopxieSubcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_subcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_category_name', 'vendor_id'], 'required'],
            [['category_id', 'sub_category_createdby', 'deleted', 'vendor_id'], 'integer'],
            [['sub_category_createdat'], 'safe'],
            [['sub_category_name', 'sub_category_display_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_category_id' => 'Sub Category ID',
            'sub_category_name' => 'Sub Category Name',
            'sub_category_display_name' => 'Sub Category Display Name',
            'category_id' => 'Category ID',
            'sub_category_createdby' => 'Sub Category Createdby',
            'sub_category_createdat' => 'Sub Category Createdat',
            'deleted' => 'Deleted',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
