<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

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
    <body>
    <?php $this->beginBody() ?>

    <header>
        <section class="nav"><div class="logo">Tetsuo</div> <section class="nav-list">
                <div>Home</div>
                <div>Pages</div>
                <div>Portfolio</div>
                <div>Blog</div>
                <div>Shop</div>
                <div>Elements</div>
                <div><img src="<?= Yii::$app->urlManager->baseUrl ?>/img/Link → gg1.png" alt=""></div>
                <div><img src="<?= Yii::$app->urlManager->baseUrl ?>/img/Link → SVG.png" alt=""></div>
                <div><img src="<?= Yii::$app->urlManager->baseUrl ?>/img/Link → gg3.png" alt="" width="30px" height="30px">></div>
            </section></section>
    </header>


    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= $content ?>

        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-end"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();


