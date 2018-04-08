<?php

namespace app\modules\analytics\controllers;

class ClusteringController extends \yii\web\Controller
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
