<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KeranjangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keranjangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keranjang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Keranjang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_keranjang',
            'kode_pembeli',
            'kode_penjual',
            'tanggal_jual',
            'total_belanja',
            //'total_item',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Keranjang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_keranjang' => $model->id_keranjang, 'kode_pembeli' => $model->kode_pembeli, 'kode_penjual' => $model->kode_penjual]);
                 }
            ],
        ],
    ]); ?>


</div>
