<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penjual */

$this->title = $model->kode_penjual;
$this->params['breadcrumbs'][] = ['label' => 'Penjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penjual-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_penjual' => $model->kode_penjual], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_penjual' => $model->kode_penjual], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_penjual',
            'nama_penjual',
        ],
    ]) ?>

</div>
