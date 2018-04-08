<section class="menu cid-qNtmUG7qjJ" once="menu" id="menu1-e">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color <?=(Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id=='index') ? "transparent" : "" ?>">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?= Yii::getAlias('@web') ?>/">
                        <img src="<?= Yii::getAlias('@web') ?>/assets/assets/images/icon2-512x512.png" alt="<?=Yii::$app->name ?>"
                             title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="<?= Yii::getAlias('@web') ?>/">Data mining Web servislari</a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4"
                       href="<?= Yii::$app->urlManager->createUrl('documentation') ?>">
                        <span
                            class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>Dokumentatsiya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4"
                       href="<?= Yii::$app->urlManager->createUrl('download') ?>"><span
                            class="mbrib-down mbr-iconfont mbr-iconfont-btn"></span>
                        Yuklab olish </a>
                </li>
            </ul>
            <?php if(Yii::$app->user->isGuest): ?>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="<?= Yii::$app->urlManager->createUrl('/user/login') ?>">
                    <span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span> Kirish
                </a>
            </div>
            <?php else: ?>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="<?= Yii::$app->urlManager->createUrl('/analytics') ?>">
                    <span class="mbri-setting2 mbr-iconfont mbr-iconfont-btn"></span> Analitika
                </a>
            </div>
            <?php endif;?>
        </div>
    </nav>
</section>
<?php if(Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id=='index'):?>
<section class="header1 cid-qNw1APxYqO mbr-fullscreen mbr-parallax-background" id="header1-j">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-2">
                    MA'LUMOTLARNI TAHLIL QILISH PLATFORMASI</h1>

                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">Yangi bilimlarni
                    kashf qiling</h3>

                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    Platformadan foydalangan holda, ma'lumotlaringizni intellektual tahlilini amalga oshiring va yangi
                    bilimlarni kashf eting</p>

                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4"
                                                             href="<?= Yii::$app->urlManager->createUrl('learn') ?>">
                        <span class="mbr-iconfont mbri-file"></span>O'RGANISH</a>
                    <a class="btn btn-md btn-white-outline display-4" href="<?= Yii::$app->urlManager->createUrl('demo') ?>">
                        <span class="mbr-iconfont mbri-idea"></span>DEMO
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else:?>
    <br/>
    <br/>
    <br/>
<?php endif;?>