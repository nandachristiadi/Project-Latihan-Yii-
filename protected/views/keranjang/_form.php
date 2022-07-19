<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Keranjang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keranjang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_jual')->textInput() ?>

    <?= $form->field($model, 'total_belanja')->textInput() ?>

    <?= $form->field($model, 'total_item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
