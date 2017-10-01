<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieInventory;

/**
 * ShopxieInventorySearch represents the model behind the search form about `app\models\ShopxieInventory`.
 */
class ShopxieInventorySearch extends ShopxieInventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trans_id', 'trans_items', 'trans_user', 'trans_location', 'trans_inventory', 'vendor_id', 'store_id'], 'integer'],
            [['trans_date', 'trans_comment'], 'safe'],
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
        $query = ShopxieInventory::find();

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
            'trans_id' => $this->trans_id,
            'trans_items' => $this->trans_items,
            'trans_user' => $this->trans_user,
            'trans_date' => $this->trans_date,
            'trans_location' => $this->trans_location,
            'trans_inventory' => $this->trans_inventory,
            'vendor_id' => $this->vendor_id,
            'store_id' => $this->store_id,
        ]);

        $query->andFilterWhere(['like', 'trans_comment', $this->trans_comment]);

        return $dataProvider;
    }
}
