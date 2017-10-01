<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_sales_payments".
 *
 * @property integer $sale_id
 * @property string $payment_type
 * @property string $payment_amount
 * @property integer $vendor_id
 */
class ShopxieSalesPayments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_sales_payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_id', 'payment_type', 'payment_amount', 'vendor_id'], 'required'],
            [['sale_id', 'vendor_id'], 'integer'],
            [['payment_amount'], 'number'],
            [['payment_type'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sale_id' => 'Sale ID',
            'payment_type' => 'Payment Type',
            'payment_amount' => 'Payment Amount',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
