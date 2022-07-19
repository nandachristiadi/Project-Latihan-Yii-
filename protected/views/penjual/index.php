<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Penjual;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenjualSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penjuals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjual-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penjual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_penjual',
            'nama_penjual',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penjual $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_penjual' => $model->kode_penjual]);
                 }
            ],
        ],
    ]); ?>


</div>
