<?php
/* @var $this yii\web\View */
?>
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
                                <form action="<?= Yii::$app->urlManager->createUrl('/user/security/logout') ?>"
                                      method="post">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn-link" value="Chiqish">
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <h1>forecasting/solve</h1>
                <p>
                    You may change the content of this page by modifying
                    the file <code><?= __FILE__; ?></code>.
                </p>
            </div>
        </div>
    </div>
</div>