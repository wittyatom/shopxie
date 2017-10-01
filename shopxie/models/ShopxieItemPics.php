<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_item_pics".
 *
 * @property integer $pic_id
 * @property integer $item_id
 * @property string $pics_meta
 * @property string $hero_image
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted
 * @property integer $module_id
 * @property integer $vendor_id
 */
class ShopxieItemPics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_item_pics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'created_by', 'updated_by', 'module_id', 'vendor_id'], 'integer'],
            [['pics_meta', 'deleted'], 'string'],
            [['hero_image', 'vendor_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['hero_image'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pic_id' => 'Pic ID',
            'item_id' => 'Item ID',
            'pics_meta' => 'Pics Meta',
            'hero_image' => 'Hero Image',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted' => 'Deleted',
            'module_id' => 'Module ID',
            'vendor_id' => 'Vendor ID',
        ];
    }
}
