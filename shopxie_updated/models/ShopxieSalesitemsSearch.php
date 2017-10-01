<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSalesItems;

/**
 * ShopxieSalesitemsSearch represents the model behind the search form about `app\models\ShopxieSalesItems`.
 */
class ShopxieSalesitemsSearch extends ShopxieSalesItems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_id', 'item_id', 'line', 'item_location', 'quantity_id', 'vendor_id', 'store_id', 'vat', 'cst'], 'integer'],
            [['description', 'serialnumber'], 'safe'],
            [['quantity_purchased', 'item_cost_price', 'item_unit_price', 'selling_price', 'discount_percent', 'shipping_price'], 'number'],
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
        $query = ShopxieSalesItems::find();

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
            'quantity_purchased' => $this->quantity_purchased,
            'item_cost_price' => $this->item_cost_price,
            'item_unit_price' => $this->item_unit_price,
            'selling_price' => $this->selling_price,
            'discount_percent' => $this->discount_percent,
            'item_location' => $this->item_location,
            'quantity_id' => $this->quantity_id,
            'shipping_price' => $this->shipping_price,
            'vendor_id' => $this->vendor_id,
            'store_id' => $this->store_id,
            'vat' => $this->vat,
            'cst' => $this->cst,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'serialnumber', $this->serialnumber]);

        return $dataProvider;
    }
}
