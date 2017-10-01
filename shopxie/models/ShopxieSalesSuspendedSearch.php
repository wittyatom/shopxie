<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSalesSuspended;

/**
 * ShopxieSalesSuspendedSearch represents the model behind the search form about `app\models\ShopxieSalesSuspended`.
 */
class ShopxieSalesSuspendedSearch extends ShopxieSalesSuspended
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_time', 'comment', 'invoice_number'], 'safe'],
            [['customer_id', 'employee_id', 'sale_id', 'vendor_id'], 'integer'],
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
        $query = ShopxieSalesSuspended::find();

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
            'sale_time' => $this->sale_time,
            'customer_id' => $this->customer_id,
            'employee_id' => $this->employee_id,
            'sale_id' => $this->sale_id,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'invoice_number', $this->invoice_number]);

        return $dataProvider;
    }
}
