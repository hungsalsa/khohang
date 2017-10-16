<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nhacungcap;

/**
 * NhacungcapSearch represents the model behind the search form about `backend\models\Nhacungcap`.
 */
class NhacungcapSearch extends Nhacungcap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['macongty', 'manhanvien', 'status', 'created_at', 'updated_at'], 'integer'],
            [['tencogty', 'tenviethoadon', 'diachi', 'dienthoai', 'fax', 'email'], 'safe'],
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
        $query = Nhacungcap::find();

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
            'macongty' => $this->macongty,
            'manhanvien' => $this->manhanvien,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'tencogty', $this->tencogty])
            ->andFilterWhere(['like', 'tenviethoadon', $this->tenviethoadon])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'dienthoai', $this->dienthoai])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
