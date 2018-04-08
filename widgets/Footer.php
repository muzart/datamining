<?php

namespace app\widgets;

use \yii\bootstrap\Widget;

class Footer extends Widget{

    public function run(){
        return $this->render('footer');
    }
}