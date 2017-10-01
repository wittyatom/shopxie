<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieBrand;

/**
 * ShopxieBrandSearch represents the model behind the search form about `app\models\ShopxieBrand`.
 */
class ShopxieBrandSearch extends ShopxieBrand
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'created_by', 'deleted', 'updated_by', 'vendor_id', 'store_id'], 'integer'],
            [['brand_name', 'brand_display_name', 'created_at', 'updated_at'], 'safe'],
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
        $query = ShopxieBrand::find();

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
            'brand_id' => $this->brand_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'deleted' => $this->deleted,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'vendor_id' => $this->vendor_id,
            'store_id' => $this->store_id,
        ]);

        $query->andFilterWhere(['like', 'brand_name', $this->brand_name])
            ->andFilterWhere(['like', 'brand_display_name', $this->brand_display_name]);

        return $dataProvider;
    }
}
