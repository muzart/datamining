<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'assets/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css',
        "assets/assets/web/assets/mobirise-icons/mobirise-icons.css",
        "assets/assets/tether/tether.min.css",
        "assets/assets/bootstrap/css/bootstrap.min.css",
        "assets/assets/bootstrap/css/bootstrap-grid.min.css",
        "assets/assets/bootstrap/css/bootstrap-reboot.min.css",
        "assets/assets/socicon/css/styles.css",
        "assets/assets/dropdown/css/style.css",
        "assets/assets/theme/css/style.css",
        "assets/assets/mobirise/css/mbr-additional.css",
    ];
    public $js = [
        "assets/assets/web/assets/jquery/jquery.min.js",
        "assets/assets/popper/popper.min.js",
        "assets/assets/tether/tether.min.js",
        "assets/assets/bootstrap/js/bootstrap.min.js",
        "assets/assets/touchswipe/jquery.touch-swipe.min.js",
        "assets/assets/parallax/jarallax.min.js",
        "assets/assets/mbr-popup-btns/mbr-popup-btns.js",
        "assets/assets/smoothscroll/smooth-scroll.js",
        "assets/assets/dropdown/js/script.min.js",
        "assets/assets/theme/js/script.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',

    ];
}
