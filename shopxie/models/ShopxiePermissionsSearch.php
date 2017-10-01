<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopxiePermissions;

/**
 * ShopxiePermissionsSearch represents the model behind the search form about `app\models\ShopxiePermissions`.
 */
class ShopxiePermissionsSearch extends ShopxiePermissions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permission_id', 'module_id'], 'safe'],
            [['location_id', 'vendor_id'], 'integer'],
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
        $query = ShopxiePermissions::find();

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
            'location_id' => $this->location_id,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'permission_id', $this->permission_id])
            ->andFilterWhere(['like', 'module_id', $this->module_id]);

        return $dataProvider;
    }
}
