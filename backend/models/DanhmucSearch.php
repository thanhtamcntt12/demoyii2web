<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Danhmuc;

/**
 * DanhmucSearch represents the model behind the search form about `backend\models\Danhmuc`.
 */
class DanhmucSearch extends Danhmuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCate', 'Parentid', 'Groupsid', 'status', 'created_at', 'updated_at'], 'integer'],
            [['Icon', 'CateName', 'Keywords', 'Description', 'Order'], 'safe'],
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
        $query = Danhmuc::find();

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
            'idCate' => $this->idCate,
            'Parentid' => $this->Parentid,
            'Groupsid' => $this->Groupsid,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'Icon', $this->Icon])
            ->andFilterWhere(['like', 'CateName', $this->CateName])
            ->andFilterWhere(['like', 'Keywords', $this->Keywords])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Order', $this->Order]);

        return $dataProvider;
    }
}
