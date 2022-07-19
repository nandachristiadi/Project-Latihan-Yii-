<?php
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Keranjang;
use yii\helpers\ArrayHelper;
use backend\models\Standard;

$this->title = 'Isi Keranjang';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php



/* @var $this yii\web\View */
/* @var $searchModel app\models\IsiKeranjangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keranjangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id_keranjang' => 'id_keranjang']); ?>

                    <?= $form->field($model, 'Nama Pembeli')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'Nama Penjual')->textInput(['autofocus' => true]) ?>

                    <?= Html::activeDropDownList($model, 'id_keranjang',
                    ArrayHelper::map(Standard::find()->all(), 'kode_barang', 'pilih barang')) ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php 
    ?>
</div>

