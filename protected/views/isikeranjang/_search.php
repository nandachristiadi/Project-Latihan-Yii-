<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IsiKeranjangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="isi-keranjang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_isi') ?>

    <?= $form->field($model, 'id_keranjang') ?>

    <?= $form->field($model, 'kode_barang') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
