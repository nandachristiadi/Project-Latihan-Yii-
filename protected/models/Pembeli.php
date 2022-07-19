<?php

namespace app\Models;

use Yii;

/**
 * This is the model class for table "pembeli".
 *
 * @property string $kode_pembeli
 * @property string|null $nama_pembeli
 * @property string|null $no_tlpn
 *
 * @property Keranjang[] $keranjangs
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pembeli'], 'required'],
            [['kode_pembeli'], 'string', 'max' => 10],
            [['nama_pembeli'], 'string', 'max' => 255],
            [['no_tlpn'], 'string', 'max' => 20],
            [['kode_pembeli'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pembeli' => 'Kode Pembeli',
            'nama_pembeli' => 'Nama Pembeli',
            'no_tlpn' => 'No Tlpn',
        ];
    }

    /**
     * Gets query for [[Keranjangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeranjangs()
    {
        return $this->hasMany(Keranjang::className(), ['kode_pembeli' => 'kode_pembeli']);
    }
}
