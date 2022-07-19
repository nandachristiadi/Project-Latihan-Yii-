<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Keranjang;

/**
 * KeranjangSearch represents the model behind the search form of `app\models\Keranjang`.
 */
class KeranjangSearch extends Keranjang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keranjang', 'total_belanja', 'total_item'], 'integer'],
            [['kode_pembeli', 'kode_penjual', 'tanggal_jual'], 'safe'],
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
        $query = Keranjang::find();

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
            'id_keranjang' => $this->id_keranjang,
            'tanggal_jual' => $this->tanggal_jual,
            'total_belanja' => $this->total_belanja,
            'total_item' => $this->total_item,
        ]);

        $query->andFilterWhere(['like', 'kode_pembeli', $this->kode_pembeli])
            ->andFilterWhere(['like', 'kode_penjual', $this->kode_penjual]);

        return $dataProvider;
    }
}
