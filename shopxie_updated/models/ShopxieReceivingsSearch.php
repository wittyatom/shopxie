<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieReceivings;

/**
 * ShopxieReceivingsSearch represents the model behind the search form about `app\models\ShopxieReceivings`.
 */
class ShopxieReceivingsSearch extends ShopxieReceivings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receiving_time', 'comment', 'payment_type', 'invoice_number'], 'safe'],
            [['supplier_id', 'employee_id', 'receiving_id', 'vendor_id'], 'integer'],
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
        $query = ShopxieReceivings::find();

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
            'receiving_time' => $this->receiving_time,
            'supplier_id' => $this->supplier_id,
            'employee_id' => $this->employee_id,
            'receiving_id' => $this->receiving_id,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'payment_type', $this->payment_type])
            ->andFilterWhere(['like', 'invoice_number', $this->invoice_number]);

        return $dataProvider;
    }
}
