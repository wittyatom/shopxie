<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_grants".
 *
 * @property string $permission_id
 * @property integer $person_id
 * @property integer $vendor_id
 * @property integer $store_id
 */
class ShopxieGrants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_grants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permission_id', 'person_id', 'vendor_id'], 'required'],
            [['permission_id'], 'string'],
            [['person_id', 'vendor_id', 'store_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'permission_id' => 'Permission ID',
            'person_id' => 'Person ID',
            'vendor_id' => 'Vendor ID',
            'store_id' => 'Store ID',
        ];
    }
}
