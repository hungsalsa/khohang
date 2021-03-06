<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Mathang;

/**
 * MathangSearch represents the model behind the search form about `backend\models\Mathang`.
 */
class MathangSearch extends Mathang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mahang', 'macongty', 'maloaihang','id_thuonghieu', 'soluong', 'giahang', 'manhanvien', 'status', 'created_at', 'updated_at'], 'integer'],
            [['tenhang', 'donvitinh','mota'], 'safe'],
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
        $query = Mathang::find();

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
            'mahang' => $this->mahang,
            'id_thuonghieu' => $this->id_thuonghieu,
            'macongty' => $this->macongty,
            'maloaihang' => $this->maloaihang,
            'soluong' => $this->soluong,
            'mota' => $this->mota,
            'giahang' => $this->giahang,
            'manhanvien' => $this->manhanvien,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'tenhang', $this->tenhang])
            ->andFilterWhere(['like', 'donvitinh', $this->donvitinh]);

        return $dataProvider;
    }
}
