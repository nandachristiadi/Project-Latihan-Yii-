<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penjual;

/**
 * PenjualSearch represents the model behind the search form of `app\models\Penjual`.
 */
class PenjualSearch extends Penjual
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penjual', 'nama_penjual'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Penjual::find();

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
        $query->andFilterWhere(['like', 'kode_penjual', $this->kode_penjual])
            ->andFilterWhere(['like', 'nama_penjual', $this->nama_penjual]);

        return $dataProvider;
    }
}
