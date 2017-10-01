<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_zip".
 *
 * @property string $zip_code
 * @property string $city
 * @property string $state
 */
class ShopxieZip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_zip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zip_code', 'city', 'state'], 'required'],
            [['zip_code'], 'string', 'max' => 10],
            [['city', 'state'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'zip_code' => 'Zip Code',
            'city' => 'City',
            'state' => 'State',
        ];
    }
}
