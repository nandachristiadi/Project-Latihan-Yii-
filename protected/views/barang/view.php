<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = $model->kode_barang;
$this->params['breadcrumbs'][] = ['label' => 'Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_barang' => $model->kode_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_barang' => $model->kode_barang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin untuk menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_barang',
            'nama_barang',
            'harga',
        ],
    ]) ?>

</div>
