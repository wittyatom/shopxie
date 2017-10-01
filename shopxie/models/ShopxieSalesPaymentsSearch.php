<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSalesPayments;

/**
 * ShopxieSalesPaymentsSearch represents the model behind the search form about `app\models\ShopxieSalesPayments`.
 */
class ShopxieSalesPaymentsSearch extends ShopxieSalesPayments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_id', 'vendor_id'], 'integer'],
            [['payment_type'], 'safe'],
            [['payment_amount'], 'number'],
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
        $query = ShopxieSalesPayments::find();

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
            'sale_id' => $this->sale_id,
            'payment_amount' => $this->payment_amount,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'payment_type', $this->payment_type]);

        return $dataProvider;
    }
}
