<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penjual */

$this->title = 'Update Penjual: ' . $model->kode_penjual;
$this->params['breadcrumbs'][] = ['label' => 'Penjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_penjual, 'url' => ['view', 'kode_penjual' => $model->kode_penjual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
