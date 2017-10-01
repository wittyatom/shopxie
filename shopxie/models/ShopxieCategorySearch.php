<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieCategory;

/**
 * ShopxieCategorySearch represents the model behind the search form about `app\models\ShopxieCategory`.
 */
class ShopxieCategorySearch extends ShopxieCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'brand_id', 'parent_id', 'created_by', 'deleted', 'vendor_id'], 'integer'],
            [['category_name', 'category_display_name', 'created_at'], 'safe'],
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
        $query = ShopxieCategory::find();

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
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'parent_id' => $this->parent_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'deleted' => $this->deleted,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_name])
            ->andFilterWhere(['like', 'category_display_name', $this->category_display_name]);

        return $dataProvider;
    }
}
