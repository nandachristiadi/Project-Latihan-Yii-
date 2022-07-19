<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IsiKeranjang */

$this->title = 'Update Isi Keranjang: ' . $model->id_isi;
$this->params['breadcrumbs'][] = ['label' => 'Isi Keranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_isi, 'url' => ['view', 'id_isi' => $model->id_isi, 'id_keranjang' => $model->id_keranjang, 'kode_barang' => $model->kode_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="isi-keranjang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
