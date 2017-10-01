<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieItems;

/**
 * ShopxieItemsSearch represents the model behind the search form about `app\models\ShopxieItems`.
 */
class ShopxieItemsSearch extends ShopxieItems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'item_number', 'description', 'custom5', 'custom6', 'custom7', 'custom8', 'custom9', 'custom10', 'create_date', 'update_date', 'sku_id', 'attribute1', 'attribute2'], 'safe'],
            [['supplier_id', 'receiving_quantity', 'item_id', 'pic_id', 'allow_alt_description', 'is_serialized', 'deleted', 'brand_id', 'parent_id', 'category_id', 'subcategory_id', 'item_color', 'vendor_id', 'store_id', 'status'], 'integer'],
            [['cost_price', 'unit_price', 'reorder_level'], 'number'],
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
        $query = ShopxieItems::find();

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
            'supplier_id' => $this->supplier_id,
            'cost_price' => $this->cost_price,
            'unit_price' => $this->unit_price,
            'reorder_level' => $this->reorder_level,
            'receiving_quantity' => $this->receiving_quantity,
            'item_id' => $this->item_id,
            'pic_id' => $this->pic_id,
            'allow_alt_description' => $this->allow_alt_description,
            'is_serialized' => $this->is_serialized,
            'deleted' => $this->deleted,
            'brand_id' => $this->brand_id,
            'parent_id' => $this->parent_id,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'item_color' => $this->item_color,
            'vendor_id' => $this->vendor_id,
            'store_id' => $this->store_id,
            'status' => $this->status,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'item_number', $this->item_number])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'custom5', $this->custom5])
            ->andFilterWhere(['like', 'custom6', $this->custom6])
            ->andFilterWhere(['like', 'custom7', $this->custom7])
            ->andFilterWhere(['like', 'custom8', $this->custom8])
            ->andFilterWhere(['like', 'custom9', $this->custom9])
            ->andFilterWhere(['like', 'custom10', $this->custom10])
            ->andFilterWhere(['like', 'sku_id', $this->sku_id])
            ->andFilterWhere(['like', 'attribute1', $this->attribute1])
            ->andFilterWhere(['like', 'attribute2', $this->attribute2]);

        return $dataProvider;
    }
}
