<?php
/* @var $model frontend\models\Employee */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Register employee';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->session->hasFlash('employeeStatus')) {
    echo Yii::$app->session->getFlash('employeeStatus');
}

?>

<div class="body-content">
    <div class="col-lg-12">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]);
        ?>

        <?php echo $form->field($model, 'firstName')->textInput()->hint('Пожалуйста, введите имя')->label('Имя'); ?>

        <?php echo $form->field($model, 'lastName')->textInput()->hint('Пожалуйста, введите фамилию')->label('Фамилия'); ?>

        <?php echo $form->field($model, 'middleName')->textInput()->hint('Пожалуйста, введите отчество')->label('Отчество'); ?>

        <?php echo $form->field($model, 'birthday')->textInput()->hint('Пожалуйста, введите дату рождения в формате yyyy-mm-dd')->label('Дата рождения'); ?>

        <?php echo $form->field($model, 'city')->textInput()->hint('Пожалуйста, выберите город проживания')->label('Город проживания')->dropDownList($model->getCityList()); ?>

        <?php echo $form->field($model, 'startDateWork')->textInput()->hint('Пожалуйста, введите дату начала работы в формате yyyy-mm-dd')->label('Дата начала работы'); ?>

        <?php echo $form->field($model, 'position')->textInput()->hint('Пожалуйста, укажите вашу должность')->label('Занимаемая должность'); ?>

        <?php echo $form->field($model, 'idCode')->textInput()->hint('Пожалуйста, укажите идентификационный код (10 символов)')->label('Идентификационный код'); ?>

        <?php echo $form->field($model, 'email')->textInput()->hint('Пожалуйста, укажите Ваш email адресс')->label('Email адресс'); ?>

        <?php echo Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-danger']); ?>

        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-lg-12">
        <hr>
        <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
    </div>   
</div>   