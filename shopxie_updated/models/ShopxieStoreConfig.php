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
 * @property string $store_category
 * @property string $store_parent_categories
 * @property string $store_phone_number
 * @property string $email
 * @property string $store_address
 * @property integer $store_postal_code
 * @property string $store_city
 * @property string $store_state
 * @property string $store_lat
 * @property string $store_lng
 * @property integer $store_type
 * @property integer $store_status
 * @property string $added_date
 * @property integer $modified
 * @property string $invoice_configration
 * @property integer $store_mode
 * @property integer $store_frequency
 * @property string $vat_tin
 * @property string $cst_tin
 * @property string $pan
 * @property string $tan
 * @property integer $exchange_allowed
 * @property integer $exchange_period_days
 * @property integer $refund_allowed
 * @property string $refund_give
 * @property string $free
 * @property string $company_name
 * @property integer $company_type
 * @property string $country
 * @property integer $currency
 * @property integer $language
 * @property string $company_pan
 * @property string $personal_pan
 * @property integer $operating_account_type
 * @property string $account_holder
 * @property integer $bank_name
 * @property integer $account_number
 * @property integer $account_type
 * @property string $ifsc_code
 * @property string $state
 * @property string $city
 * @property string $branch
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
            [['person_id', 'name', 'store_name', 'store_category', 'store_parent_categories', 'store_phone_number', 'email', 'store_address', 'store_postal_code', 'store_city', 'store_lat', 'store_lng', 'added_date', 'modified', 'invoice_configration', 'refund_give', 'free', 'company_name', 'country', 'company_pan', 'personal_pan', 'account_holder', 'ifsc_code', 'state', 'city', 'branch'], 'required'],
            [['person_id', 'store_postal_code', 'store_type', 'store_status', 'modified', 'store_mode', 'store_frequency', 'exchange_allowed', 'exchange_period_days', 'refund_allowed', 'company_type', 'currency', 'language', 'operating_account_type', 'bank_name', 'account_number', 'account_type'], 'integer'],
            [['store_category', 'store_parent_categories', 'store_address'], 'string'],
            [['store_lat', 'store_lng'], 'number'],
            [['added_date'], 'safe'],
            [['name', 'store_name', 'store_city', 'store_state'], 'string', 'max' => 100],
            [['store_phone_number', 'email', 'invoice_configration', 'refund_give'], 'string', 'max' => 255],
            [['vat_tin', 'cst_tin', 'pan', 'tan'], 'string', 'max' => 25],
            [['free'], 'string', 'max' => 2000],
            [['company_name', 'country', 'company_pan', 'personal_pan', 'account_holder', 'ifsc_code', 'state', 'city', 'branch'], 'string', 'max' => 200],
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
            'store_category' => 'Store Category',
            'store_parent_categories' => 'Store Parent Categories',
            'store_phone_number' => 'Store Phone Number',
            'email' => 'Email',
            'store_address' => 'Store Address',
            'store_postal_code' => 'Store Postal Code',
            'store_city' => 'Store City',
            'store_state' => 'Store State',
            'store_lat' => 'Store Lat',
            'store_lng' => 'Store Lng',
            'store_type' => 'Store Type',
            'store_status' => 'Store Status',
            'added_date' => 'Added Date',
            'modified' => 'Modified',
            'invoice_configration' => 'Invoice Configration',
            'store_mode' => 'Store Mode',
            'store_frequency' => 'Store Frequency',
            'vat_tin' => 'Vat Tin',
            'cst_tin' => 'Cst Tin',
            'pan' => 'Pan',
            'tan' => 'Tan',
            'exchange_allowed' => 'Exchange Allowed',
            'exchange_period_days' => 'Exchange Period Days',
            'refund_allowed' => 'Refund Allowed',
            'refund_give' => 'Refund Give',
            'free' => 'Free',
            'company_name' => 'Company Name',
            'company_type' => 'Company Type',
            'country' => 'Country',
            'currency' => 'Currency',
            'language' => 'Language',
            'company_pan' => 'Company Pan',
            'personal_pan' => 'Personal Pan',
            'operating_account_type' => 'Operating Account Type',
            'account_holder' => 'Account Holder',
            'bank_name' => 'Bank Name',
            'account_number' => 'Account Number',
            'account_type' => 'Account Type',
            'ifsc_code' => 'Ifsc Code',
            'state' => 'State',
            'city' => 'City',
            'branch' => 'Branch',
        ];
    }
}
