<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IsiKeranjang */

$this->title = $model->id_isi;
$this->params['breadcrumbs'][] = ['label' => 'Isi Keranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="isi-keranjang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_isi' => $model->id_isi, 'id_keranjang' => $model->id_keranjang, 'kode_barang' => $model->kode_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_isi' => $model->id_isi, 'id_keranjang' => $model->id_keranjang, 'kode_barang' => $model->kode_barang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_isi',
            'id_keranjang',
            'kode_barang',
            'harga',
            'jumlah',
            'total',
        ],
    ]) ?>

</div>
