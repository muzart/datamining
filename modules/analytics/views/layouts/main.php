<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */
//use yii\dependencies;
//Register class
//AppAsset::register($this);
if (class_exists('ramosisw\CImaterial\web\MaterialAsset')) {
    ramosisw\CImaterial\web\MaterialAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="<?= Yii::$app->urlManager->createUrl('/') ?>" class="simple-text">
                Analitika
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li<?=(Yii::$app->controller->id=='default')? " class='active'":""?>>
                    <a href="<?= Yii::$app->urlManager->createUrl('analytics/default') ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li<?=(Yii::$app->controller->id=='forecasting')? " class='active'":""?>>
                    <a href="<?= Yii::$app->urlManager->createUrl('analytics/forecasting') ?>">
                        <i class="material-icons">assessment</i>
                        <p>Bashoratlash</p>
                    </a>
                </li>
                <li<?=(Yii::$app->controller->id=='classification')? " class='active'":""?>>
                    <a href="<?= Yii::$app->urlManager->createUrl('analytics/classification') ?>">
                        <i class="material-icons">blur_linear</i>
                        <p>Klassifikatsiya</p>
                    </a>
                </li>
                <li<?=(Yii::$app->controller->id=='clustering')? " class='active'":""?>>
                    <a href="<?= Yii::$app->urlManager->createUrl('analytics/clustering') ?>">
                        <i class="material-icons">grain</i>
                        <p>Klasterizatsiya</p>
                    </a>
                </li>
                <li<?=(Yii::$app->controller->id=='association')? " class='active'":""?>>
                    <a href="<?= Yii::$app->urlManager->createUrl('analytics/association') ?>">
                        <i class="material-icons">tune</i>
                        <p>Assotsiativ qoidalar</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ish stoli</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>

                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('/analytics/user/profile') ?>">Profil</a>
                                </li>
                                <li>
                                    <a href="<?=Yii::$app->urlManager->createUrl('/user/security/logout')?>" data-method="post">Chiqish</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
