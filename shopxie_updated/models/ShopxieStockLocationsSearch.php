<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieStockLocations;

/**
 * ShopxieStockLocationsSearch represents the model behind the search form about `app\models\ShopxieStockLocations`.
 */
class ShopxieStockLocationsSearch extends ShopxieStockLocations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_id', 'deleted', 'vendor_id'], 'integer'],
            [['location_name'], 'safe'],
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
        $query = ShopxieStockLocations::find();

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
            'location_id' => $this->location_id,
            'deleted' => $this->deleted,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'location_name', $this->location_name]);

        return $dataProvider;
    }
}
