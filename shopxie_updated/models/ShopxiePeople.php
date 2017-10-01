<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_people".
 *
 * @property string $name
 * @property string $last_name
 * @property integer $gender
 * @property string $phone_number
 * @property string $email
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $comments
 * @property integer $person_id
 * @property integer $vendor_id
 * @property integer $store_id
 */
class ShopxiePeople extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'vendor_id', 'store_id'], 'integer'],
            [['address_1', 'comments'], 'string'],
            [['name', 'last_name', 'phone_number', 'email', 'address_2', 'city', 'state', 'zip', 'country'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'country' => 'Country',
            'comments' => 'Comments',
            'person_id' => 'Person ID',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
        ];
    }
}
