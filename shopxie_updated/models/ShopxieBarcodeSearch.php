<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieBarcode;

/**
 * ShopxieBarcodeSearch represents the model behind the search form about `app\models\ShopxieBarcode`.
 */
class ShopxieBarcodeSearch extends ShopxieBarcode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vendor_id', 'created_by', 'updated_by'], 'integer'],
            [['barcode', 'created_at'], 'safe'],
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
        $query = ShopxieBarcode::find();

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
            'id' => $this->id,
            'vendor_id' => $this->vendor_id,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'barcode', $this->barcode]);

        return $dataProvider;
    }
}
