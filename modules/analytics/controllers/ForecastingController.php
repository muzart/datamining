<?php

namespace app\modules\analytics\controllers;

use app\models\ForecastingForm;

class ForecastingController extends \yii\web\Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        $model = new ForecastingForm();
        if($model->load(\Yii::$app->request->post())){
            echo $model->request();
            \Yii::$app->end();
        }
        return $this->render('index',[
            'model' => $model
        ]);
    }

    public function actionSolve()
    {
        return $this->render('solve');
    }

}
