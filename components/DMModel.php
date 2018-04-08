<?php

namespace app\components;
use app\models\Files;
use app\models\Method;

/**
 * Created by PhpStorm.
 * User: Muza
 * Date: 08.04.2018
 * Time: 20:57
 */
class DMModel extends \yii\base\Model
{

    const REQUEST_URL = 'http://localhost:5000/mdm/api/v1.0/';

    protected function createFile($filepath){
        $f = new Files();
        $f->filepath = $filepath;
        $f->method_id = $this->method;
        $method = Method::findOne(['id'=>$this->method]);
        $f->category_id = $method->category_id;
        $f->save();
    }

}