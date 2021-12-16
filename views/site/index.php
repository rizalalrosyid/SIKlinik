<?php

/* @var $this yii\web\View */

$this->title = 'SIKlinik';
use yii\helpers\Url;
?>
<div class="site-index">

    <div class="jumbotron jumbotron-fluid text-center bg-transparent">
        <div class="container">
            <h1 class="display-4" style="font-weight: 700;">SISTEM INFORMASI KLINIK</h1>

            <p class="lead">Prototype Aplikasi Sistem Informasi Klinik</p>

            <p><a class="btn btn-lg btn-warning" href="<?= Url::toRoute(['site/login'])?>">Login</a></p>
        </div>
    </div>
</div>
