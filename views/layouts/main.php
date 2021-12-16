<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php if(Yii::$app->user->isGuest): ?>
        <?php
            NavBar::begin([
                // 'brandLabel' => Yii::$app->name,
                'brandLabel' => 'SIKlinik',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
                ],
            ]);
            NavBar::end();
        ?>
    <?php else: ?>
        <?php
            NavBar::begin([
                // 'brandLabel' => Yii::$app->name,
                'brandLabel' => 'SIKlinik',
                'brandUrl' => ['/site/dashboard'],
                'options' => [
                    'class' => 'navbar navbar-dark bg-dark fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => [
                    'class' => 'navbar-nav navbar-right'
                ],
                'items' => [
                    // ['label' => 'Home', 'url' => ['/site/index']],
                    // ['label' => 'About', 'url' => ['/site/about']],
                    // ['label' => 'Contact', 'url' => ['/site/contact']],
                    [
                        'label' => 'Master',
                        'url' => ['site/index'],
                        'options'=>['class'=>'dropdown'],
                        'visible' => !Yii::$app->user->isGuest,
                        'template' => '<a href="{url}" class="href_class">{label}</a>',
                        'items' => [
                            ['label' => 'Wilayah', 'url' => ['/master/wilayah']],
                            ['label' => 'User', 'url' => ['/master/users']],
                            ['label' => 'Pegawai', 'url' => ['/master/pegawai']],
                            ['label' => 'Tindakan', 'url' => ['/master/tindakan']],
                            ['label' => 'Obat', 'url' => ['/master/obat']],
                        ]
                    ],
                    [
                        'label' => 'Transaksi',
                        'url' => ['site/index'],
                        'options'=>['class'=>'dropdown'],
                        'visible' => !Yii::$app->user->isGuest,
                        'template' => '<a href="{url}" class="href_class">{label}</a>',
                        'items' => [
                            ['label' => 'Pasien', 'url' => ['/transaksi/pasien']],
                            ['label' => 'Pemeriksaan', 'url' => ['/transaksi/pemeriksaan']],
                        ]
                    ],
                    
                    Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->nama_user . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            NavBar::end();
        ?>
    <?php endif; ?>
    
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
