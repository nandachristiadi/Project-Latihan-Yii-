<?php

namespace app\Models;

use Yii;

/**
 * This is the model class for table "penjual".
 *
 * @property string $kode_penjual
 * @property string|null $nama_penjual
 *
 * @property Keranjang[] $keranjangs
 */
class Penjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penjual'], 'required'],
            [['kode_penjual'], 'string', 'max' => 10],
            [['nama_penjual'], 'string', 'max' => 255],
            [['kode_penjual'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_penjual' => 'Kode Penjual',
            'nama_penjual' => 'Nama Penjual',
        ];
    }

    /**
     * Gets query for [[Keranjangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeranjangs()
    {
        return $this->hasMany(Keranjang::className(), ['kode_penjual' => 'kode_penjual']);
    }
}
