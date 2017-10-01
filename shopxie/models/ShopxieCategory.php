<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property string $category_display_name
 * @property integer $brand_id
 * @property integer $parent_id
 * @property integer $created_by
 * @property string $created_at
 * @property integer $deleted
 * @property integer $vendor_id
 */
class ShopxieCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'created_by', 'created_at', 'vendor_id'], 'required'],
            [['brand_id', 'parent_id', 'created_by', 'deleted', 'vendor_id'], 'integer'],
            [['created_at'], 'safe'],
            [['category_name', 'category_display_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'category_display_name' => 'Category Display Name',
            'brand_id' => 'Brand ID',
            'parent_id' => 'Parent ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'deleted' => 'Deleted',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
