<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieBanners;

/**
 * ShopxieBannersSearch represents the model behind the search form about `app\models\ShopxieBanners`.
 */
class ShopxieBannersSearch extends ShopxieBanners
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banner_id', 'banner_type', 'deleted'], 'integer'],
            [['banner_url', 'created', 'updated'], 'safe'],
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
        $query = ShopxieBanners::find();

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
            'banner_id' => $this->banner_id,
            'banner_type' => $this->banner_type,
            'created' => $this->created,
            'updated' => $this->updated,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'banner_url', $this->banner_url]);

        return $dataProvider;
    }
}
