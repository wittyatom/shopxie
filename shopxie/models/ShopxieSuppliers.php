<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_suppliers".
 *
 * @property integer $person_id
 * @property string $company_name
 * @property string $agency_name
 * @property string $account_number
 * @property integer $deleted
 * @property integer $vendor_id
 */
class ShopxieSuppliers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_suppliers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id', 'company_name', 'agency_name', 'vendor_id'], 'required'],
            [['person_id', 'deleted', 'vendor_id'], 'integer'],
            [['company_name', 'agency_name', 'account_number'], 'string', 'max' => 255],
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
            'agency_name' => 'Agency Name',
            'account_number' => 'Account Number',
            'deleted' => 'Deleted',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
