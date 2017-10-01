<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_giftcards".
 *
 * @property string $record_time
 * @property integer $giftcard_id
 * @property integer $giftcard_number
 * @property string $value
 * @property integer $deleted
 * @property integer $person_id
 * @property integer $vendor_id
 * @property integer $store_id
 * @property string $expiry_date
 * @property integer $giftcard_status
 * @property string $giftcard_tnc
 * @property integer $sale_id
 */
class ShopxieGiftcards extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_giftcards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_time', 'expiry_date'], 'safe'],
            [['giftcard_number', 'value', 'vendor_id'], 'required'],
            [['giftcard_number', 'deleted', 'person_id', 'vendor_id', 'store_id', 'giftcard_status', 'sale_id'], 'integer'],
            [['value'], 'number'],
            [['giftcard_tnc'], 'string', 'max' => 1000],
            [['giftcard_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_time' => 'Record Time',
            'giftcard_id' => 'Giftcard ID',
            'giftcard_number' => 'Giftcard Number',
            'value' => 'Value',
            'deleted' => 'Deleted',
            'person_id' => 'Person ID',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
            'expiry_date' => 'Expiry Date',
            'giftcard_status' => 'Giftcard Status',
            'giftcard_tnc' => 'Giftcard Tnc',
            'sale_id' => 'Sale ID',
        ];
    }
}
