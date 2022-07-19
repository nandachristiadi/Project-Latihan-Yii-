<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $kode_barang
 * @property string|null $nama_barang
 * @property int|null $harga
 *
 * @property IsiKeranjang[] $isiKeranjangs
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang'], 'required'],
            [['harga'], 'integer'],
            [['kode_barang'], 'string', 'max' => 10],
            [['nama_barang'], 'string', 'max' => 255],
            [['kode_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'harga' => 'Harga',
        ];
    }

    /**
     * Gets query for [[IsiKeranjangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIsiKeranjangs()
    {
        return $this->hasMany(IsiKeranjang::className(), ['kode_barang' => 'kode_barang']);
    }
}
