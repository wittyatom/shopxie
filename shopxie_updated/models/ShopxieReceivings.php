<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_receivings".
 *
 * @property string $receiving_time
 * @property integer $supplier_id
 * @property integer $employee_id
 * @property string $comment
 * @property integer $receiving_id
 * @property string $payment_type
 * @property string $invoice_number
 * @property integer $vendor_id
 */
class ShopxieReceivings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_receivings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receiving_time'], 'safe'],
            [['supplier_id', 'employee_id', 'vendor_id'], 'integer'],
            [['comment', 'vendor_id'], 'required'],
            [['comment'], 'string'],
            [['payment_type'], 'string', 'max' => 20],
            [['invoice_number'], 'string', 'max' => 32],
            [['invoice_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'receiving_time' => 'Receiving Time',
            'supplier_id' => 'Supplier ID',
            'employee_id' => 'Employee ID',
            'comment' => 'Comment',
            'receiving_id' => 'Receiving ID',
            'payment_type' => 'Payment Type',
            'invoice_number' => 'Invoice Number',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
