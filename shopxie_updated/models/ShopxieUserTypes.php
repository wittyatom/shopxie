<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_user_types".
 *
 * @property integer $user_type_id
 * @property integer $user_id
 * @property integer $store_id
 * @property integer $user_type
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $assign_by
 * @property string $created_date
 * @property string $update_date
 */
class ShopxieUserTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_user_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_by', 'created_date', 'update_date'], 'required'],
            [['user_id', 'store_id', 'user_type', 'created_by', 'updated_by', 'assign_by'], 'integer'],
            [['created_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_type_id' => 'User Type ID',
            'user_id' => 'User ID',
            'store_id' => 'Store ID',
            'user_type' => 'User Type',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'assign_by' => 'Assign By',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
        ];
    }
}
