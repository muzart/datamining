<?php

namespace app\modules\analytics\controllers;

class ClassificationController extends \yii\web\Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSolve()
    {
        return $this->render('solve');
    }

}
