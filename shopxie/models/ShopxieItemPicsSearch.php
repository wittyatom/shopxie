<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxieItemPics;

/**
 * ShopxieItemPicsSearch represents the model behind the search form about `app\models\ShopxieItemPics`.
 */
class ShopxieItemPicsSearch extends ShopxieItemPics
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pic_id', 'item_id', 'created_by', 'updated_by', 'module_id', 'vendor_id'], 'integer'],
            [['pics_meta', 'hero_image', 'created_at', 'updated_at', 'deleted'], 'safe'],
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
        $query = ShopxieItemPics::find();

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
            'pic_id' => $this->pic_id,
            'item_id' => $this->item_id,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'module_id' => $this->module_id,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'pics_meta', $this->pics_meta])
            ->andFilterWhere(['like', 'hero_image', $this->hero_image])
            ->andFilterWhere(['like', 'deleted', $this->deleted]);

        return $dataProvider;
    }
}
