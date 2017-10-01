<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_store_config".
 *
 * @property integer $store_id
 * @property integer $person_id
 * @property string $name
 * @property string $store_name
 * @property string $store_categories
 * @property string $store_phone_number
 * @property string $email
 * @property string $store_address
 * @property integer $store_postal_code
 * @property string $store_city
 * @property double $store_lat
 * @property double $store_lng
 * @property string $added_date
 * @property integer $modified
 */
class ShopxieStoreConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_store_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id', 'name', 'store_name', 'store_categories', 'store_phone_number', 'email', 'store_address', 'store_postal_code', 'store_city', 'store_lat', 'store_lng', 'added_date', 'modified'], 'required'],
            [['person_id', 'store_postal_code', 'modified'], 'integer'],
            [['store_categories', 'store_address'], 'string'],
            [['store_lat', 'store_lng'], 'number'],
            [['added_date'], 'safe'],
            [['name', 'store_name', 'store_city'], 'string', 'max' => 100],
            [['store_phone_number', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'store_id' => 'Store ID',
            'person_id' => 'Person ID',
            'name' => 'Name',
            'store_name' => 'Store Name',
            'store_categories' => 'Store Categories',
            'store_phone_number' => 'Store Phone Number',
            'email' => 'Email',
            'store_address' => 'Store Address',
            'store_postal_code' => 'Store Postal Code',
            'store_city' => 'Store City',
            'store_lat' => 'Store Lat',
            'store_lng' => 'Store Lng',
            'added_date' => 'Added Date',
            'modified' => 'Modified',
        ];
    }
}
