<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IsiKeranjang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="isi-keranjang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_isi')->textInput() ?>

    <?= $form->field($model, 'id_keranjang')->textInput() ?>

    <?= $form->field($model, 'kode_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
