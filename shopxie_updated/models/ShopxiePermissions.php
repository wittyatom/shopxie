<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_permissions".
 *
 * @property string $permission_id
 * @property string $module_id
 * @property integer $location_id
 * @property integer $vendor_id
 */
class ShopxiePermissions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_permissions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permission_id', 'module_id', 'vendor_id'], 'required'],
            [['location_id', 'vendor_id'], 'integer'],
            [['permission_id', 'module_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'permission_id' => 'Permission ID',
            'module_id' => 'Module ID',
            'location_id' => 'Location ID',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
