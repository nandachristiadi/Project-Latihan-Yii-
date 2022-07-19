<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penjual */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_penjual')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
