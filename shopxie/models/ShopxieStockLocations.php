<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_stock_locations".
 *
 * @property integer $location_id
 * @property string $location_name
 * @property integer $deleted
 * @property integer $vendor_id
 */
class ShopxieStockLocations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_stock_locations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deleted', 'vendor_id'], 'integer'],
            [['vendor_id'], 'required'],
            [['location_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'location_id' => 'Location ID',
            'location_name' => 'Location Name',
            'deleted' => 'Deleted',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
