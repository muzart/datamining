<?php
/**
 * Created by PhpStorm.
 * User: Muza
 * Date: 08.04.2018
 * Time: 15:44
 */

namespace app\models;


use linslin\yii2\curl\Curl;
use yii\base\Model;
use yii\helpers\Url;
use yii\web\UploadedFile;

class ClassificationForm extends DMModel
{
    public $file;
    public $method;
    public $window;
    public $test_count;


    public function rules()
    {
        return [
            // username and password are both required
            [['file', 'method','window','test_count'], 'required'],
            // rememberMe must be a boolean value
            ['file', 'file'],
            // password is validated by validatePassword()
        ];
    }

    public function request(){
        $file = UploadedFile::getInstance($this,'file');
        if($file){
            $filename = \Yii::$app->security->generateRandomString().$file->name;
            $filepath = \Yii::getAlias('@webroot').'/files/'.$filename;
            $file_url = 'http://'.\Yii::$app->params['domainName'].'/files/'.$filename;
            if($file->saveAs($filepath))
                $this->createFile($filepath);
            // POST RAW JSON
            $curl = new Curl();
            $params = [
                'params'=>[
                    'file_url' => $file_url,
                    'window_size' => $this->window * 1,
                    'test_count' => $this->test_count * 1,
                ]];
            echo json_encode($params);
            exit;
            $response = $curl->setRequestBody(json_encode($params))
                ->setHeaders([
                    'Content-Type' => 'application/json',
                    'Content-Length' => strlen(json_encode($params))
                ])->post('http://localhost:5000/mdm/api/v1.0/forecasting');
            return $response;
        }
    }

}