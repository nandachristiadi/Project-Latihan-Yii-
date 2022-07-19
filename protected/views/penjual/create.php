<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penjual */

$this->title = 'Input Penjual';
$this->params['breadcrumbs'][] = ['label' => 'Penjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
