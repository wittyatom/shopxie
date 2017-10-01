<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSalesItemsTaxes;

/**
 * ShopxieSalesItemsTaxesSearch represents the model behind the search form about `app\models\ShopxieSalesItemsTaxes`.
 */
class ShopxieSalesItemsTaxesSearch extends ShopxieSalesItemsTaxes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_id', 'item_id', 'line', 'vendor_id'], 'integer'],
            [['name'], 'safe'],
            [['percent'], 'number'],
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
        $query = ShopxieSalesItemsTaxes::find();

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
            'item_id' => $this->item_id,
            'line' => $this->line,
            'percent' => $this->percent,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
