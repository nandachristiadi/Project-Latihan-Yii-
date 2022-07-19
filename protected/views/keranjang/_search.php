<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeranjangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keranjang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_keranjang') ?>

    <?= $form->field($model, 'kode_pembeli') ?>

    <?= $form->field($model, 'kode_penjual') ?>

    <?= $form->field($model, 'tanggal_jual') ?>

    <?= $form->field($model, 'total_belanja') ?>

    <?php // echo $form->field($model, 'total_item') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
