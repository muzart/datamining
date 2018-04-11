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
            $data = $model->request();
		echo $data; exit;
            //$data = json_decode($data);
            //$id = $data['id'];
            //return $this->redirect(['solve','id'=>$id]);
        }
        return $this->render('index',[
            'model' => $model
        ]);
    }

    public function actionSolve($id)
    {
        return $this->render('solve',['id'=>$id]);
    }

}
