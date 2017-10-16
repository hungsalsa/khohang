<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Chitietdathang;

/**
 * ChitietdathangSearch represents the model behind the search form about `backend\models\Chitietdathang`.
 */
class ChitietdathangSearch extends Chitietdathang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sohoadon', 'mahang', 'giaban', 'soluong', 'created_at', 'updated_at'], 'integer'],
            [['mucgiamgia'], 'number'],
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
        $query = Chitietdathang::find();

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
            'sohoadon' => $this->sohoadon,
            'mahang' => $this->mahang,
            'giaban' => $this->giaban,
            'soluong' => $this->soluong,
            'mucgiamgia' => $this->mucgiamgia,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
