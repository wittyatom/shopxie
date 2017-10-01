<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_sessions".
 *
 * @property string $session_id
 * @property string $ip_address
 * @property string $user_agent
 * @property integer $last_activity
 * @property string $user_data
 * @property integer $vendor_id
 */
class ShopxieSessions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_sessions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_id', 'user_agent', 'vendor_id'], 'required'],
            [['last_activity', 'vendor_id'], 'integer'],
            [['user_data'], 'string'],
            [['session_id'], 'string', 'max' => 40],
            [['ip_address'], 'string', 'max' => 45],
            [['user_agent'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'session_id' => 'Session ID',
            'ip_address' => 'Ip Address',
            'user_agent' => 'User Agent',
            'last_activity' => 'Last Activity',
            'user_data' => 'User Data',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
