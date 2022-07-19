<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pembeli */

$this->title = $model->kode_pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pembeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_pembeli' => $model->kode_pembeli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_pembeli' => $model->kode_pembeli], [
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
            'kode_pembeli',
            'nama_pembeli',
            'no_tlpn',
        ],
    ]) ?>

</div>
