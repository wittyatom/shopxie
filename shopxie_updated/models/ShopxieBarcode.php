<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_barcode".
 *
 * @property integer $id
 * @property integer $vendor_id
 * @property string $barcode
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 */
class ShopxieBarcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_barcode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'barcode', 'created_by', 'updated_by', 'created_at'], 'required'],
            [['vendor_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at'], 'safe'],
            [['barcode'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendor_id' => 'Vendor ID',
            'barcode' => 'Barcode',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
        ];
    }
}
