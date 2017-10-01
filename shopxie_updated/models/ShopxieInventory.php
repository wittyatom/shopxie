<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_inventory".
 *
 * @property integer $trans_id
 * @property integer $trans_items
 * @property integer $trans_user
 * @property string $trans_date
 * @property string $trans_comment
 * @property integer $trans_location
 * @property integer $trans_inventory
 * @property integer $vendor_id
 * @property integer $store_id
 */
class ShopxieInventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trans_items', 'trans_user', 'trans_location', 'trans_inventory', 'vendor_id', 'store_id'], 'integer'],
            [['trans_date'], 'safe'],
            [['trans_comment', 'vendor_id'], 'required'],
            [['trans_comment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trans_id' => 'Trans ID',
            'trans_items' => 'Trans Items',
            'trans_user' => 'Trans User',
            'trans_date' => 'Trans Date',
            'trans_comment' => 'Trans Comment',
            'trans_location' => 'Trans Location',
            'trans_inventory' => 'Trans Inventory',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
        ];
    }
}
