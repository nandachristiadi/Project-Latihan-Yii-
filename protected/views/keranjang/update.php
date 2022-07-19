<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Keranjang */

$this->title = 'Update Keranjang: ' . $model->id_keranjang;
$this->params['breadcrumbs'][] = ['label' => 'Keranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keranjang, 'url' => ['view', 'id_keranjang' => $model->id_keranjang, 'kode_pembeli' => $model->kode_pembeli, 'kode_penjual' => $model->kode_penjual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keranjang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
