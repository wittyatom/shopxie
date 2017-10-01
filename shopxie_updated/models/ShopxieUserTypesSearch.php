<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieUserTypes;

/**
 * ShopxieUserTypesSearch represents the model behind the search form about `app\models\ShopxieUserTypes`.
 */
class ShopxieUserTypesSearch extends ShopxieUserTypes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_type_id', 'user_id', 'store_id', 'user_type', 'created_by', 'updated_by', 'assign_by'], 'integer'],
            [['created_date', 'update_date'], 'safe'],
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
        $query = ShopxieUserTypes::find();

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
            'user_type_id' => $this->user_type_id,
            'user_id' => $this->user_id,
            'store_id' => $this->store_id,
            'user_type' => $this->user_type,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'assign_by' => $this->assign_by,
            'created_date' => $this->created_date,
            'update_date' => $this->update_date,
        ]);

        return $dataProvider;
    }
}
