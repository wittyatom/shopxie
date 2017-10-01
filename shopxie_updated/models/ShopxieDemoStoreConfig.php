<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_demo_store_config".
 *
 * @property integer $demo_store_config_id
 * @property integer $days
 */
class ShopxieDemoStoreConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_demo_store_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['days'], 'required'],
            [['days'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'demo_store_config_id' => 'Demo Store Config ID',
            'days' => 'Days',
        ];
    }
}
