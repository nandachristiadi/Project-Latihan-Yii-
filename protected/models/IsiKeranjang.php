<?php

namespace app\Models;

use Yii;

/**
 * This is the model class for table "isi_keranjang".
 *
 * @property int $id_isi
 * @property int $id_keranjang
 * @property string $kode_barang
 * @property int|null $harga
 * @property int|null $jumlah
 * @property int|null $total
 *
 * @property Keranjang $keranjang
 * @property Barang $kodeBarang
 */
class IsiKeranjang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'isi_keranjang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_isi', 'id_keranjang', 'kode_barang'], 'required'],
            [['id_isi', 'id_keranjang', 'harga', 'jumlah', 'total'], 'integer'],
            [['kode_barang'], 'string', 'max' => 10],
            [['id_isi', 'id_keranjang', 'kode_barang'], 'unique', 'targetAttribute' => ['id_isi', 'id_keranjang', 'kode_barang']],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['kode_barang' => 'kode_barang']],
            [['id_keranjang'], 'exist', 'skipOnError' => true, 'targetClass' => Keranjang::className(), 'targetAttribute' => ['id_keranjang' => 'id_keranjang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_isi' => 'Id Isi',
            'id_keranjang' => 'Id Keranjang',
            'kode_barang' => 'Kode Barang',
            'harga' => 'Harga',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[Keranjang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeranjang()
    {
        return $this->hasOne(Keranjang::className(), ['id_keranjang' => 'id_keranjang']);
    }

    /**
     * Gets query for [[KodeBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBarang()
    {
        return $this->hasOne(Barang::className(), ['kode_barang' => 'kode_barang']);
    }
}
