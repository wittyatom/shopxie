<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieItemQuantities;

/**
 * ShopxieItemQuantitiesSearch represents the model behind the search form about `app\models\ShopxieItemQuantities`.
 */
class ShopxieItemQuantitiesSearch extends ShopxieItemQuantities
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantity_id', 'item_id', 'location_id', 'quantity', 'vendor_id', 'store_id'], 'integer'],
            [['purchase_price', 'mrp', 'discount', 'selling_price'], 'number'],
            [['size'], 'safe'],
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
        $query = ShopxieItemQuantities::find();

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
            'quantity_id' => $this->quantity_id,
            'item_id' => $this->item_id,
            'location_id' => $this->location_id,
            'quantity' => $this->quantity,
            'purchase_price' => $this->purchase_price,
            'mrp' => $this->mrp,
            'discount' => $this->discount,
            'selling_price' => $this->selling_price,
            'vendor_id' => $this->vendor_id,
            'store_id' => $this->store_id,
        ]);

        $query->andFilterWhere(['like', 'size', $this->size]);

        return $dataProvider;
    }
}
