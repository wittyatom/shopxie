<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieSize;

/**
 * ShopxieSizeSearch represents the model behind the search form about `app\models\ShopxieSize`.
 */
class ShopxieSizeSearch extends ShopxieSize
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size_id', 'vendor_id'], 'integer'],
            [['range', 'gender_profile'], 'safe'],
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
        $query = ShopxieSize::find();

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
            'size_id' => $this->size_id,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'range', $this->range])
            ->andFilterWhere(['like', 'gender_profile', $this->gender_profile]);

        return $dataProvider;
    }
}
