<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pembeli;

/**
 * PembeliSearch represents the model behind the search form of `app\models\Pembeli`.
 */
class PembeliSearch extends Pembeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pembeli', 'nama_pembeli', 'no_tlpn'], 'safe'],
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
        $query = Pembeli::find();

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
        $query->andFilterWhere(['like', 'kode_pembeli', $this->kode_pembeli])
            ->andFilterWhere(['like', 'nama_pembeli', $this->nama_pembeli])
            ->andFilterWhere(['like', 'no_tlpn', $this->no_tlpn]);

        return $dataProvider;
    }
}
