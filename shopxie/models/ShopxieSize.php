<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_size".
 *
 * @property integer $size_id
 * @property string $range
 * @property string $gender_profile
 * @property integer $vendor_id
 */
class ShopxieSize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_size';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['range', 'gender_profile', 'vendor_id'], 'required'],
            [['range', 'gender_profile'], 'string'],
            [['vendor_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'size_id' => 'Size ID',
            'range' => 'Range',
            'gender_profile' => 'Gender Profile',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
