<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IsiKeranjang */

$this->title = 'Create Isi Keranjang';
$this->params['breadcrumbs'][] = ['label' => 'Isi Keranjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="isi-keranjang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
