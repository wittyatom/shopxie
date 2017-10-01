<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieItemKitItems;

/**
 * ShopxieItemKitItemsSearch represents the model behind the search form about `app\models\ShopxieItemKitItems`.
 */
class ShopxieItemKitItemsSearch extends ShopxieItemKitItems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_kit_id', 'item_id', 'vendor_id'], 'integer'],
            [['quantity'], 'number'],
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
        $query = ShopxieItemKitItems::find();

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
            'item_kit_id' => $this->item_kit_id,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'vendor_id' => $this->vendor_id,
        ]);

        return $dataProvider;
    }
}
