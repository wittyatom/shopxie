<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSessionCart;

/**
 * ShopxieSessionCartSearch represents the model behind the search form about `app\models\ShopxieSessionCart`.
 */
class ShopxieSessionCartSearch extends ShopxieSessionCart
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_cart_id', 'user_id', 'store_id'], 'integer'],
            [['create_date', 'update_date', 'data'], 'safe'],
            [['additional_discount'], 'number'],
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
        $query = ShopxieSessionCart::find();

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
            'session_cart_id' => $this->session_cart_id,
            'user_id' => $this->user_id,
            'store_id' => $this->store_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'additional_discount' => $this->additional_discount,
        ]);

        $query->andFilterWhere(['like', 'data', $this->data]);

        return $dataProvider;
    }
}
