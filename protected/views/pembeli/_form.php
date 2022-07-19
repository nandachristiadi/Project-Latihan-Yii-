<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pembeli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_tlpn')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
