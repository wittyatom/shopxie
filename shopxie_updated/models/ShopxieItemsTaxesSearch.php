<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieItemsTaxes;

/**
 * ShopxieItemsTaxesSearch represents the model behind the search form about `app\models\ShopxieItemsTaxes`.
 */
class ShopxieItemsTaxesSearch extends ShopxieItemsTaxes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'vendor_id'], 'integer'],
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
        $query = ShopxieItemsTaxes::find();

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
            'item_id' => $this->item_id,
            'percent' => $this->percent,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
