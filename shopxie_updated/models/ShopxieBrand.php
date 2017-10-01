<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_brand".
 *
 * @property integer $brand_id
 * @property string $brand_name
 * @property string $brand_display_name
 * @property integer $created_by
 * @property string $created_at
 * @property integer $deleted
 * @property integer $updated_by
 * @property string $updated_at
 * @property integer $vendor_id
 * @property integer $store_id
 */
class ShopxieBrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_by', 'created_at', 'vendor_id'], 'required'],
            [['created_by', 'deleted', 'updated_by', 'vendor_id', 'store_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['brand_name', 'brand_display_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brand_id' => 'Brand ID',
            'brand_name' => 'Brand Name',
            'brand_display_name' => 'Brand Display Name',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'deleted' => 'Deleted',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
        ];
    }
}
