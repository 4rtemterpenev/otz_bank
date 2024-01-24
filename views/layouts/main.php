<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/template_assets/favicon.ico')]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title>Отзывы</title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>

<header>
    <section class="head">
        <div class="wraper">
            <div class="head-block">
                <a href="/" class="head-block__logo">
                    <div>
                        <img src="/template_assets/img/head-logo.svg" alt="">
                    </div>
                </a>
                <div class="head-block__phone">
                    <div class="head-block__icon">
                        <img src="/template_assets/img/head-phone.svg" alt="">
                    </div>
                    <a href="tel:+78002008638" class="head-block__number">8 800 200 86 38</a>
                </div>
            </div>
        </div>
    </section>
</header>
<main>
    <?= $content ?>
</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
