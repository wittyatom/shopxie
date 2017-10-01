<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieStoreConfig;

/**
 * ShopxieStoreConfigSearch represents the model behind the search form about `app\models\ShopxieStoreConfig`.
 */
class ShopxieStoreConfigSearch extends ShopxieStoreConfig
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'person_id', 'store_postal_code', 'store_type', 'store_status', 'modified', 'store_mode', 'store_frequency', 'exchange_allowed', 'exchange_period_days', 'refund_allowed', 'company_type', 'currency', 'language', 'operating_account_type', 'bank_name', 'account_number', 'account_type'], 'integer'],
            [['name', 'store_name', 'store_category', 'store_parent_categories', 'store_phone_number', 'email', 'store_address', 'store_city', 'store_state', 'added_date', 'invoice_configration', 'vat_tin', 'cst_tin', 'pan', 'tan', 'refund_give', 'free', 'company_name', 'country', 'company_pan', 'personal_pan', 'account_holder', 'ifsc_code', 'state', 'city', 'branch'], 'safe'],
            [['store_lat', 'store_lng'], 'number'],
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
        $query = ShopxieStoreConfig::find();

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
            'store_id' => $this->store_id,
            'person_id' => $this->person_id,
            'store_postal_code' => $this->store_postal_code,
            'store_lat' => $this->store_lat,
            'store_lng' => $this->store_lng,
            'store_type' => $this->store_type,
            'store_status' => $this->store_status,
            'added_date' => $this->added_date,
            'modified' => $this->modified,
            'store_mode' => $this->store_mode,
            'store_frequency' => $this->store_frequency,
            'exchange_allowed' => $this->exchange_allowed,
            'exchange_period_days' => $this->exchange_period_days,
            'refund_allowed' => $this->refund_allowed,
            'company_type' => $this->company_type,
            'currency' => $this->currency,
            'language' => $this->language,
            'operating_account_type' => $this->operating_account_type,
            'bank_name' => $this->bank_name,
            'account_number' => $this->account_number,
            'account_type' => $this->account_type,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'store_name', $this->store_name])
            ->andFilterWhere(['like', 'store_category', $this->store_category])
            ->andFilterWhere(['like', 'store_parent_categories', $this->store_parent_categories])
            ->andFilterWhere(['like', 'store_phone_number', $this->store_phone_number])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'store_address', $this->store_address])
            ->andFilterWhere(['like', 'store_city', $this->store_city])
            ->andFilterWhere(['like', 'store_state', $this->store_state])
            ->andFilterWhere(['like', 'invoice_configration', $this->invoice_configration])
            ->andFilterWhere(['like', 'vat_tin', $this->vat_tin])
            ->andFilterWhere(['like', 'cst_tin', $this->cst_tin])
            ->andFilterWhere(['like', 'pan', $this->pan])
            ->andFilterWhere(['like', 'tan', $this->tan])
            ->andFilterWhere(['like', 'refund_give', $this->refund_give])
            ->andFilterWhere(['like', 'free', $this->free])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'company_pan', $this->company_pan])
            ->andFilterWhere(['like', 'personal_pan', $this->personal_pan])
            ->andFilterWhere(['like', 'account_holder', $this->account_holder])
            ->andFilterWhere(['like', 'ifsc_code', $this->ifsc_code])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'branch', $this->branch]);

        return $dataProvider;
    }
}
