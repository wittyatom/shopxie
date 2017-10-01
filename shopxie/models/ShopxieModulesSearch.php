<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieModules;

/**
 * ShopxieModulesSearch represents the model behind the search form about `app\models\ShopxieModules`.
 */
class ShopxieModulesSearch extends ShopxieModules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_lang_key', 'desc_lang_key', 'module_id'], 'safe'],
            [['sort', 'vendor_id'], 'integer'],
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
        $query = ShopxieModules::find();

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
            'sort' => $this->sort,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'name_lang_key', $this->name_lang_key])
            ->andFilterWhere(['like', 'desc_lang_key', $this->desc_lang_key])
            ->andFilterWhere(['like', 'module_id', $this->module_id]);

        return $dataProvider;
    }
}
