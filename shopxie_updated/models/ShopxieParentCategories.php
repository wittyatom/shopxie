<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopxie_parent_categories".
 *
 * @property integer $shopxie_parent_category_id
 * @property string $name
 * @property integer $store_id
 * @property integer $deleted
 */
class ShopxieParentCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shopxie_parent_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['store_id', 'deleted'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shopxie_parent_category_id' => 'Shopxie Parent Category ID',
            'name' => 'Name',
            'store_id' => 'Store ID',
            'deleted' => 'Deleted',
        ];
    }
}
