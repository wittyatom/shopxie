<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_customers".
 *
 * @property integer $person_id
 * @property string $company_name
 * @property string $account_number
 * @property integer $taxable
 * @property integer $deleted
 * @property string $created_date
 * @property integer $is_new
 * @property integer $vendor_id
 * @property integer $store_id
 * @property string $username
 * @property string $password
 * @property string $hash
 */
class ShopxieCustomers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id', 'vendor_id', 'username'], 'required'],
            [['person_id', 'taxable', 'deleted', 'is_new', 'vendor_id', 'store_id'], 'integer'],
            [['created_date'], 'safe'],
            [['company_name', 'account_number', 'username', 'password'], 'string', 'max' => 255],
            [['hash'], 'string', 'max' => 100],
            [['account_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'person_id' => 'Person ID',
            'company_name' => 'Company Name',
            'account_number' => 'Account Number',
            'taxable' => 'Taxable',
            'deleted' => 'Deleted',
            'created_date' => 'Created Date',
            'is_new' => 'Is New',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
            'username' => 'Username',
            'password' => 'Password',
            'hash' => 'Hash',
        ];
    }
}
