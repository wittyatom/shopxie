<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_modules".
 *
 * @property string $name_lang_key
 * @property string $desc_lang_key
 * @property integer $sort
 * @property string $module_id
 * @property integer $vendor_id
 */
class ShopxieModules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_lang_key', 'desc_lang_key', 'sort', 'module_id', 'vendor_id'], 'required'],
            [['sort', 'vendor_id'], 'integer'],
            [['name_lang_key', 'desc_lang_key', 'module_id'], 'string', 'max' => 255],
            [['desc_lang_key'], 'unique'],
            [['name_lang_key'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name_lang_key' => 'Name Lang Key',
            'desc_lang_key' => 'Desc Lang Key',
            'sort' => 'Sort',
            'module_id' => 'Module ID',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
