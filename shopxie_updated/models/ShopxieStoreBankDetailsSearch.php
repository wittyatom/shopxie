<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieStoreBankDetails;

/**
 * ShopxieStoreBankDetailsSearch represents the model behind the search form about `app\models\ShopxieStoreBankDetails`.
 */
class ShopxieStoreBankDetailsSearch extends ShopxieStoreBankDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_id', 'store_id', 'account_number', 'deleted'], 'integer'],
            [['beneficiary_name', 'bank_name', 'operating_type', 'account_type', 'ifsc_code', 'bank_branch', 'bank_address', 'bank_state', 'bank_city', 'created_date', 'updated_date'], 'safe'],
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
        $query = ShopxieStoreBankDetails::find();

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
            'bank_id' => $this->bank_id,
            'store_id' => $this->store_id,
            'account_number' => $this->account_number,
            'deleted' => $this->deleted,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
        ]);

        $query->andFilterWhere(['like', 'beneficiary_name', $this->beneficiary_name])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'operating_type', $this->operating_type])
            ->andFilterWhere(['like', 'account_type', $this->account_type])
            ->andFilterWhere(['like', 'ifsc_code', $this->ifsc_code])
            ->andFilterWhere(['like', 'bank_branch', $this->bank_branch])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'bank_state', $this->bank_state])
            ->andFilterWhere(['like', 'bank_city', $this->bank_city]);

        return $dataProvider;
    }
}
