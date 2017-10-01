<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_session_cart".
 *
 * @property integer $session_cart_id
 * @property integer $user_id
 * @property integer $store_id
 * @property string $create_date
 * @property string $update_date
 * @property string $data
 * @property double $additional_discount
 */
class ShopxieSessionCart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_session_cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'data'], 'required'],
            [['user_id', 'store_id'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['data'], 'string'],
            [['additional_discount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'session_cart_id' => 'Session Cart ID',
            'user_id' => 'User ID',
            'store_id' => 'Store ID',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'data' => 'Data',
            'additional_discount' => 'Additional Discount',
        ];
    }
}
