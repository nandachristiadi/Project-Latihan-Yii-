<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Keranjang */

$this->title = $model->id_keranjang;
$this->params['breadcrumbs'][] = ['label' => 'Keranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="keranjang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_keranjang' => $model->id_keranjang, 'kode_pembeli' => $model->kode_pembeli, 'kode_penjual' => $model->kode_penjual], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_keranjang' => $model->id_keranjang, 'kode_pembeli' => $model->kode_pembeli, 'kode_penjual' => $model->kode_penjual], [
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
            'id_keranjang',
            'kode_pembeli',
            'kode_penjual',
            'tanggal_jual',
            'total_belanja',
            'total_item',
        ],
    ]) ?>

</div>
