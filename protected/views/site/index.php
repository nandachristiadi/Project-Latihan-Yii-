<?php
use app\models\Barang;


/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Selamat Datang</h1>

        <p class="lead">Silahkan pilih action dibawah</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Heading</h2>
                <a class="btn btn-lg btn-info" style="margin-top:25px; margin:10px;" href="['/site/barang']">Manage Barang</style></a>
            </div>
            <div class="col-lg-3">
                <h2>Heading</h2>
                <a class="btn btn-lg btn-success" style="margin-top:25px; margin:10px;" href="Link button disini">Isi Keranjang</style></a>
            </div>
            <div class="col-lg-3">
                <h2>Heading</h2>
                <a class="btn btn-lg btn-primary" style="margin-top:25px; margin:10px;" href="Link button disini">Keranjang</style></a>
            </div>
            <div class="col-lg-3">
                <h2>Heading</h2>
                <a class="btn btn-lg btn-danger" style="margin-top:25px; margin:10px;" href="Link button disini">List Penjual</style></a>
            </div>

        </div>

    </div>
</div>
