<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieCustomerLead;

/**
 * ShopxieCustomerLeadSearch represents the model behind the search form about `app\models\ShopxieCustomerLead`.
 */
class ShopxieCustomerLeadSearch extends ShopxieCustomerLead
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lead_id', 'store_id'], 'integer'],
            [['customer_phone_number', 'customer_visit'], 'safe'],
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
        $query = ShopxieCustomerLead::find();

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
            'lead_id' => $this->lead_id,
            'customer_visit' => $this->customer_visit,
            'store_id' => $this->store_id,
        ]);

        $query->andFilterWhere(['like', 'customer_phone_number', $this->customer_phone_number]);

        return $dataProvider;
    }
}
