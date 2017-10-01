<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_app_config".
 *
 * @property integer $app_id
 * @property integer $vendor_id
 * @property string $key
 * @property string $value
 */
class ShopxieAppConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_app_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'key', 'value'], 'required'],
            [['vendor_id'], 'integer'],
            [['key', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'app_id' => 'App ID',
            'vendor_id' => 'Vendor ID',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }
}
