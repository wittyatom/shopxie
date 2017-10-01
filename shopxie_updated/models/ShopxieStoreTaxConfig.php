<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_store_tax_config".
 *
 * @property integer $store_tax_config_id
 * @property integer $store_id
 * @property integer $subcategory_id
 * @property string $vat
 * @property string $cst
 * @property string $gst
 * @property integer $tax_inclusive
 * @property string $create_date
 * @property string $update_data
 */
class ShopxieStoreTaxConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_store_tax_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'subcategory_id', 'tax_inclusive', 'create_date', 'update_data'], 'required'],
            [['store_id', 'subcategory_id', 'tax_inclusive'], 'integer'],
            [['vat', 'cst', 'gst'], 'number'],
            [['create_date', 'update_data'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'store_tax_config_id' => 'Store Tax Config ID',
            'store_id' => 'Store ID',
            'subcategory_id' => 'Subcategory ID',
            'vat' => 'Vat',
            'cst' => 'Cst',
            'gst' => 'Gst',
            'tax_inclusive' => 'Tax Inclusive',
            'create_date' => 'Create Date',
            'update_data' => 'Update Data',
        ];
    }
}
