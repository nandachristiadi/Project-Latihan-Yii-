<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\IsiKeranjang;


/* @var $this yii\web\View */
/* @var $searchModel app\models\IsiKeranjangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Isi Keranjangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="isi-keranjang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Isi Keranjang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_isi',
            'id_keranjang',
            'kode_barang',
            'harga',
            'jumlah',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, IsiKeranjang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_isi' => $model->id_isi, 'id_keranjang' => $model->id_keranjang, 'kode_barang' => $model->kode_barang]);
                 }
            ],
        ],
    ]); ?>


</div>
