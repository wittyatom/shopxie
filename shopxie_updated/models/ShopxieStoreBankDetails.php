<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_store_bank_details".
 *
 * @property integer $bank_id
 * @property integer $store_id
 * @property string $beneficiary_name
 * @property string $bank_name
 * @property integer $account_number
 * @property string $operating_type
 * @property string $account_type
 * @property string $ifsc_code
 * @property string $bank_branch
 * @property string $bank_address
 * @property string $bank_state
 * @property string $bank_city
 * @property integer $deleted
 * @property string $created_date
 * @property string $updated_date
 */
class ShopxieStoreBankDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_store_bank_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'account_number', 'deleted'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['beneficiary_name', 'bank_name', 'operating_type', 'ifsc_code', 'bank_branch', 'bank_address'], 'string', 'max' => 255],
            [['account_type', 'bank_state', 'bank_city'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bank_id' => 'Bank ID',
            'store_id' => 'Store ID',
            'beneficiary_name' => 'Beneficiary Name',
            'bank_name' => 'Bank Name',
            'account_number' => 'Account Number',
            'operating_type' => 'Operating Type',
            'account_type' => 'Account Type',
            'ifsc_code' => 'Ifsc Code',
            'bank_branch' => 'Bank Branch',
            'bank_address' => 'Bank Address',
            'bank_state' => 'Bank State',
            'bank_city' => 'Bank City',
            'deleted' => 'Deleted',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }
}
