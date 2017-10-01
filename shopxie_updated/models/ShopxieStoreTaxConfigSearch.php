<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieStoreTaxConfig;

/**
 * ShopxieStoreTaxConfigSearch represents the model behind the search form about `app\models\ShopxieStoreTaxConfig`.
 */
class ShopxieStoreTaxConfigSearch extends ShopxieStoreTaxConfig
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_tax_config_id', 'store_id', 'subcategory_id', 'tax_inclusive'], 'integer'],
            [['vat', 'cst', 'gst'], 'number'],
            [['create_date', 'update_data'], 'safe'],
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
        $query = ShopxieStoreTaxConfig::find();

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
            'store_tax_config_id' => $this->store_tax_config_id,
            'store_id' => $this->store_id,
            'subcategory_id' => $this->subcategory_id,
            'vat' => $this->vat,
            'cst' => $this->cst,
            'gst' => $this->gst,
            'tax_inclusive' => $this->tax_inclusive,
            'create_date' => $this->create_date,
            'update_data' => $this->update_data,
        ]);

        return $dataProvider;
    }
}
