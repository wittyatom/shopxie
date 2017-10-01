<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_customer_lead".
 *
 * @property integer $lead_id
 * @property string $customer_phone_number
 * @property string $customer_visit
 * @property integer $store_id
 */
class ShopxieCustomerLead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_customer_lead';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_phone_number', 'store_id'], 'required'],
            [['customer_visit'], 'safe'],
            [['store_id'], 'integer'],
            [['customer_phone_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lead_id' => 'Lead ID',
            'customer_phone_number' => 'Customer Phone Number',
            'customer_visit' => 'Customer Visit',
            'store_id' => 'Store ID',
        ];
    }
}
