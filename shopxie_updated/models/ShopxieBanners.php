<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_banners".
 *
 * @property integer $banner_id
 * @property integer $banner_type
 * @property string $banner_url
 * @property string $created
 * @property string $updated
 * @property integer $deleted
 */
class ShopxieBanners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_banners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banner_type', 'banner_url', 'deleted'], 'required'],
            [['banner_type', 'deleted'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['banner_url'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banner_id' => 'Banner ID',
            'banner_type' => 'Banner Type',
            'banner_url' => 'Banner Url',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
        ];
    }
}
