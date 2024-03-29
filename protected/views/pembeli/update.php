<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembeli */

$this->title = 'Update Pembeli: ' . $model->kode_pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pembeli, 'url' => ['view', 'kode_pembeli' => $model->kode_pembeli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
