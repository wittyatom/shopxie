<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSubcategorySize;

/**
 * ShopxieSubcategorySizeSearch represents the model behind the search form about `app\models\ShopxieSubcategorySize`.
 */
class ShopxieSubcategorySizeSearch extends ShopxieSubcategorySize
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subcategory_size_id', 'sub_category_id', 'size_id', 'vendor_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ShopxieSubcategorySize::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'subcategory_size_id' => $this->subcategory_size_id,
            'sub_category_id' => $this->sub_category_id,
            'size_id' => $this->size_id,
            'vendor_id' => $this->vendor_id,
        ]);

        return $dataProvider;
    }
}
