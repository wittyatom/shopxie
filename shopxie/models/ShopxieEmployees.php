<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_employees".
 *
 * @property string $username
 * @property string $password
 * @property integer $person_id
 * @property integer $deleted
 * @property integer $vendor_id
 * @property string $hash
 */
class ShopxieEmployees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'person_id', 'vendor_id', 'hash'], 'required'],
            [['person_id', 'deleted', 'vendor_id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['hash'], 'string', 'max' => 100],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'person_id' => 'Person ID',
            'deleted' => 'Deleted',
            'vendor_id' => 'Vendor ID',
            'hash' => 'Hash',
        ];
    }
}
