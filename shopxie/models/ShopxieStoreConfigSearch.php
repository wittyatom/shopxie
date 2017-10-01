<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieStoreConfig;

/**
 * ShopxieStoreConfigSearch represents the model behind the search form about `app\models\ShopxieStoreConfig`.
 */
class ShopxieStoreConfigSearch extends ShopxieStoreConfig
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'person_id', 'store_postal_code', 'modified'], 'integer'],
            [['name', 'store_name', 'store_categories', 'store_phone_number', 'email', 'store_address', 'store_city', 'added_date'], 'safe'],
            [['store_lat', 'store_lng'], 'number'],
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
        $query = ShopxieStoreConfig::find();

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
            'store_id' => $this->store_id,
            'person_id' => $this->person_id,
            'store_postal_code' => $this->store_postal_code,
            'store_lat' => $this->store_lat,
            'store_lng' => $this->store_lng,
            'added_date' => $this->added_date,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'store_name', $this->store_name])
            ->andFilterWhere(['like', 'store_categories', $this->store_categories])
            ->andFilterWhere(['like', 'store_phone_number', $this->store_phone_number])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'store_address', $this->store_address])
            ->andFilterWhere(['like', 'store_city', $this->store_city]);

        return $dataProvider;
    }
}
