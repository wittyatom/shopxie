<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_stock_transfer".
 *
 * @property integer $transfer_id
 * @property string $dispatch_no
 * @property string $barcode
 * @property integer $transfer_from
 * @property integer $transfer_to
 * @property integer $vendor_id
 * @property string $error
 * @property string $status
 * @property string $create_date
 * @property string $update_date
 */
class ShopxieStockTransfer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_stock_transfer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barcode', 'transfer_from', 'transfer_to', 'create_date', 'update_date'], 'required'],
            [['transfer_from', 'transfer_to', 'vendor_id'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['dispatch_no', 'barcode', 'error', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'transfer_id' => 'Transfer ID',
            'dispatch_no' => 'Dispatch No',
            'barcode' => 'Barcode',
            'transfer_from' => 'Transfer From',
            'transfer_to' => 'Transfer To',
            'vendor_id' => 'Vendor ID',
            'error' => 'Error',
            'status' => 'Status',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }
}
