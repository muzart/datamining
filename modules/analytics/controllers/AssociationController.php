<?php

namespace app\modules\analytics\controllers;

class AssociationController extends \yii\web\Controller
{
    public $layout = 'main';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpload(){
        return 'Yeah';
    }

    public function actionSolve()
    {
        return $this->render('solve');
    }

}
