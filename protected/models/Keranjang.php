<?php

namespace app\Models;
use yii\bootstrap4\ActiveForm;

use Yii;

/**
 * This is the model class for table "keranjang".
 *
 * @property int $id_keranjang
 * @property string $kode_pembeli
 * @property string $kode_penjual
 * @property string|null $tanggal_jual
 * @property int|null $total_belanja
 * @property int|null $total_item
 *
 * @property IsiKeranjang[] $isiKeranjangs
 * @property Pembeli $kodePembeli
 * @property Penjual $kodePenjual
 */
class Keranjang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keranjang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pembeli', 'kode_penjual'], 'required'],
            [['tanggal_jual'], 'safe'],
            [['total_belanja', 'total_item'], 'integer'],
            [['kode_pembeli', 'kode_penjual'], 'string', 'max' => 10],
            [['kode_pembeli'], 'exist', 'skipOnError' => true, 'targetClass' => Pembeli::className(), 'targetAttribute' => ['kode_pembeli' => 'kode_pembeli']],
            [['kode_penjual'], 'exist', 'skipOnError' => true, 'targetClass' => Penjual::className(), 'targetAttribute' => ['kode_penjual' => 'kode_penjual']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_keranjang' => 'Id Keranjang',
            'kode_pembeli' => 'Kode Pembeli',
            'kode_penjual' => 'Kode Penjual',
            'tanggal_jual' => 'Tanggal Jual',
            'total_belanja' => 'Total Belanja',
            'total_item' => 'Total Item',
        ];
    }

    /**
     * Gets query for [[IsiKeranjangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIsiKeranjangs()
    {
        return $this->hasMany(IsiKeranjang::className(), ['id_keranjang' => 'id_keranjang']);
    }

    /**
     * Gets query for [[KodePembeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePembeli()
    {
        return $this->hasOne(Pembeli::className(), ['kode_pembeli' => 'kode_pembeli']);
    }

    /**
     * Gets query for [[KodePenjual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePenjual()
    {
        return $this->hasOne(Penjual::className(), ['kode_penjual' => 'kode_penjual']);
    }
    
$model = ArrayHelper::map(Standard::find()->all(), 'id_keranjang', 'kode_barang');

return $this->render('keranjang',['model'=>$model, 'items'=>$items]);
}

