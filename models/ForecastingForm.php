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
use yii\web\UploadedFile;

class ForecastingForm extends Model
{
    public $file;
    public $method;
    public $window;
    public $test_count;

    const REQUEST_URL = 'http://adress';

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
            $filepath = \Yii::getAlias('@webroot').'/files/'.\Yii::$app->security->generateRandomString().$file->name;
            if($file->saveAs($filepath))
                $this->createFile($filepath);
            // POST RAW JSON
            $curl = new Curl();
            $response = $curl->setRawPostData(
                json_encode([
                    'a' => 15,
                    'b' => 25
                 ]))
                 ->post('http://172.20.29.253:5000/mdm/api/v1.0/forecasting');
            return $response;
        }
    }

    protected function createFile($filepath){
        $f = new Files();
        $f->filepath = $filepath;
        $f->method_id = $this->method;
        $method = Method::findOne(['id'=>$this->method]);
        $f->category_id = $method->category_id;
        $f->save();
    }

}