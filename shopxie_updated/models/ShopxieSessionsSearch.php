<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSessions;

/**
 * ShopxieSessionsSearch represents the model behind the search form about `app\models\ShopxieSessions`.
 */
class ShopxieSessionsSearch extends ShopxieSessions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_id', 'ip_address', 'user_agent', 'user_data'], 'safe'],
            [['last_activity', 'vendor_id'], 'integer'],
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
        $query = ShopxieSessions::find();

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
            'last_activity' => $this->last_activity,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'session_id', $this->session_id])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'user_agent', $this->user_agent])
            ->andFilterWhere(['like', 'user_data', $this->user_data]);

        return $dataProvider;
    }
}
