<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- code tambahan tutor -->
        <style type="text/css">
    body {
    background: #f0f0f0;

 } 
 .content {
 margin-bottom: 30px;
 width: 100%;
 background: #fbfbfb;
 border-radius: 5px;
 padding: 10px;
 } 
 .content:hover {
 background: #f5f5f5;
 } 
 .content-title a {
 font-size: 18px;
 width: 100%;
 border-bottom:1px dotted #ccc;
 } 
 .content-detail {
 font-size: 10px;
 width: 100%;
 color: blue;
 margin-bottom: 10px;
 } 
 .content-fill {
 width: 100%;
 font-size: 12px;
 } 
 </style>
    

</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
                            <!-- ini navbar ustom dari web -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="position:fixed-top ;">
  <div class="container-fluid">
    <a class="navbar-brand" href="['/site/index']">Program Belajar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="['/site/index']">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header> -->

<!-- penambahan card floating diatas page -->
<div class="card" style="background: #fff; text-align: center; width: 
auto; margin-top: 50px">
 
 <div class="row-fluid">
    <div class="col-md-12">
        <div class="jumbotron" style="background: #f0f0f0; 
            margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
            <h1>Test Program</h1>
            <p class="lead">Percobaan program sederhana melalui Yii.</p>
            <p class="lead">Lokasi code protected/view/layout/main.php.</p>

            <p><a class="btn btn-lg btn-success" style="margin-top:25px" href="Link button disini">CNTH BTN</style></a></p>
        </div>
    </div>
</div>
 <div class="container">
    <div class="float" style="margin:20px; ">
        <!-- <p style="font-weight:bold">Pilih Action:</p>
        
            <p>
                <a class="btn btn-lg btn-info" style="margin-top:25px; margin:10px;" href="['/site/barang']">Manage Barang</style></a>
                <a class="btn btn-lg btn-success" style="margin-top:25px; margin:10px;" href="Link button disini">Isi Keranjang</style></a>
                <a class="btn btn-lg btn-primary" style="margin-top:25px; margin:10px;" href="Link button disini">Keranjang</style></a>
                <a class="btn btn-lg btn-danger" style="margin-top:25px; margin:10px;" href="Link button disini">List Penjual</style></a>

            </p> -->

        <?= $content ?>
        
        

    </div>
 </div>




<footer class="footer mt-auto py-3 text-muted">
    <div class="container" style="width:auto">
        <p class="float-left">&copy; Belajar Nanda <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!-- ini code bawaan isi web
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main> --> 