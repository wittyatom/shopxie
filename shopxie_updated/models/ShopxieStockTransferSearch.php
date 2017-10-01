<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieStockTransfer;

/**
 * ShopxieStockTransferSearch represents the model behind the search form about `app\models\ShopxieStockTransfer`.
 */
class ShopxieStockTransferSearch extends ShopxieStockTransfer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transfer_id', 'transfer_from', 'transfer_to', 'vendor_id'], 'integer'],
            [['dispatch_no', 'barcode', 'error', 'status', 'create_date', 'update_date'], 'safe'],
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
        $query = ShopxieStockTransfer::find();

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
            'transfer_id' => $this->transfer_id,
            'transfer_from' => $this->transfer_from,
            'transfer_to' => $this->transfer_to,
            'vendor_id' => $this->vendor_id,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'dispatch_no', $this->dispatch_no])
            ->andFilterWhere(['like', 'barcode', $this->barcode])
            ->andFilterWhere(['like', 'error', $this->error])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
