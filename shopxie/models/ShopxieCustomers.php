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
 * @property integer $vendor_id
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
            [['person_id', 'vendor_id'], 'required'],
            [['person_id', 'taxable', 'deleted', 'vendor_id'], 'integer'],
            [['company_name', 'account_number'], 'string', 'max' => 255],
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
            'vendor_id' => 'Vendor ID',
        ];
    }
}
