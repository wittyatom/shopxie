<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_sales".
 *
 * @property string $sale_time
 * @property integer $customer_id
 * @property integer $employee_id
 * @property string $comment
 * @property string $invoice_number
 * @property integer $sale_id
 * @property integer $vat
 * @property integer $cst
 * @property integer $vendor_id
 * @property integer $store_id
 * @property integer $invoice_payment_type
 */
class ShopxieSales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_sales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_time'], 'safe'],
            [['customer_id', 'employee_id', 'vat', 'cst', 'vendor_id', 'store_id', 'invoice_payment_type'], 'integer'],
            [['comment', 'vendor_id'], 'required'],
            [['comment'], 'string'],
            [['invoice_number'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sale_time' => 'Sale Time',
            'customer_id' => 'Customer ID',
            'employee_id' => 'Employee ID',
            'comment' => 'Comment',
            'invoice_number' => 'Invoice Number',
            'sale_id' => 'Sale ID',
            'vat' => 'Vat',
            'cst' => 'Cst',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
            'invoice_payment_type' => 'Invoice Payment Type',
        ];
    }
}
