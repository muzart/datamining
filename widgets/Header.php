<?php
/**
 * Created by PhpStorm.
 * User: Muza
 * Date: 01.04.18
 * Time: 15:18
 */

namespace app\widgets;


use yii\bootstrap\Widget;

class Header extends Widget{

    public function run(){
        return $this->render('header');
    }
} 