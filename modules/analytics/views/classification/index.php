<?php
/* @var $this yii\web\View */
/* @var $model app\models\ForecastingForm */

?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <div class="card-header" data-background-color="cyan">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Bashoratlash:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active">
                                        <a href="#step1" data-toggle="tab" aria-expanded="true">
                                            <i class="material-icons">file_upload</i>
                                            Faylni yuklash
                                            <div class="ripple-container"></div></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="tab-content">
                            <div class="tab-pane active" id="step1">
                                <?php
                                $form = \yii\bootstrap\ActiveForm::begin([
                                    'id' => 'forecasting-form',
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
                                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                                    ],
                                ]);
                                ?>
                                <?= $form->field($model,'file')->widget(\kartik\file\FileInput::classname(), []);?>

                                <?= $form->field($model,'method')->dropDownList(\yii\helpers\ArrayHelper::map(
                                    \app\models\Method::find()->where('category_id=1')->all(),'id','name'
                                ),['prompt'=>'Metodni tanlang']);?>
                                <?= $form->field($model,'window')->textInput() ?>
                                <?= $form->field($model,'test_count')->textInput() ?>

                                <div class="form-group">
                                    <div class="col-lg-offset-1 col-lg-11">
                                        <?= \yii\bootstrap\Html::submitButton('Jo\'natish', ['class' => 'btn btn-primary', 'name' => 'send-button']) ?>
                                    </div>
                                </div>
                                <?php \yii\bootstrap\ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>