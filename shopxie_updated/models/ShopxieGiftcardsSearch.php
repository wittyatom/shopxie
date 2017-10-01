<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieGiftcards;

/**
 * ShopxieGiftcardsSearch represents the model behind the search form about `app\models\ShopxieGiftcards`.
 */
class ShopxieGiftcardsSearch extends ShopxieGiftcards
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_time', 'expiry_date', 'giftcard_tnc'], 'safe'],
            [['giftcard_id', 'giftcard_number', 'deleted', 'person_id', 'vendor_id', 'store_id', 'giftcard_status', 'sale_id'], 'integer'],
            [['value'], 'number'],
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
        $query = ShopxieGiftcards::find();

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
            'record_time' => $this->record_time,
            'giftcard_id' => $this->giftcard_id,
            'giftcard_number' => $this->giftcard_number,
            'value' => $this->value,
            'deleted' => $this->deleted,
            'person_id' => $this->person_id,
            'vendor_id' => $this->vendor_id,
            'store_id' => $this->store_id,
            'expiry_date' => $this->expiry_date,
            'giftcard_status' => $this->giftcard_status,
            'sale_id' => $this->sale_id,
        ]);

        $query->andFilterWhere(['like', 'giftcard_tnc', $this->giftcard_tnc]);

        return $dataProvider;
    }
}
