<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSubcategory;

/**
 * ShopxieSubcategorySearch represents the model behind the search form about `app\models\ShopxieSubcategory`.
 */
class ShopxieSubcategorySearch extends ShopxieSubcategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_category_id', 'category_id', 'sub_category_createdby', 'deleted', 'vendor_id'], 'integer'],
            [['sub_category_name', 'sub_category_display_name', 'sub_category_createdat'], 'safe'],
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
        $query = ShopxieSubcategory::find();

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
            'sub_category_id' => $this->sub_category_id,
            'category_id' => $this->category_id,
            'sub_category_createdby' => $this->sub_category_createdby,
            'sub_category_createdat' => $this->sub_category_createdat,
            'deleted' => $this->deleted,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'sub_category_name', $this->sub_category_name])
            ->andFilterWhere(['like', 'sub_category_display_name', $this->sub_category_display_name]);

        return $dataProvider;
    }
}
