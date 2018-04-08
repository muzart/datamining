<?php
/**
 * Created by PhpStorm.
 * User: Muza
 * Date: 02.04.18
 * Time: 9:04
 */

namespace app\controllers;


use yii\web\Controller;

class DocumentationController extends Controller{

    public function actionIndex(){
        return $this->render('index');
    }

} 