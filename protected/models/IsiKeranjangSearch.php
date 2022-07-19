<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IsiKeranjang;

/**
 * IsiKeranjangSearch represents the model behind the search form of `app\models\IsiKeranjang`.
 */
class IsiKeranjangSearch extends IsiKeranjang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_isi', 'id_keranjang', 'harga', 'jumlah', 'total'], 'integer'],
            [['kode_barang'], 'safe'],
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
        $query = IsiKeranjang::find();

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
            'id_isi' => $this->id_isi,
            'id_keranjang' => $this->id_keranjang,
            'harga' => $this->harga,
            'jumlah' => $this->jumlah,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'kode_barang', $this->kode_barang]);

        return $dataProvider;
    }
}
