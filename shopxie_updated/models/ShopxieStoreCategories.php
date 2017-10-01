<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_store_categories".
 *
 * @property integer $shopxie_store_category_id
 * @property string $name
 * @property integer $deleted
 */
class ShopxieStoreCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_store_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['deleted'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shopxie_store_category_id' => 'Shopxie Store Category ID',
            'name' => 'Name',
            'deleted' => 'Deleted',
        ];
    }
}
