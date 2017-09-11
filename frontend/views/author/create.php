<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Author */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Create new author';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <div class="col-lg-12">
        <h1><?= Html::encode($this->title) ?></h1>
        
        <?php
        $form = ActiveForm::begin([
            'options' => ['class' => 'form-horizontal'],
        ]);
        ?>
        
        <?php echo $form->field($model, 'first_name')->textInput()->hint('Пожалуйста, введите имя')->label('Имя'); ?>
        <?php echo $form->field($model, 'last_name')->textInput()->hint('Пожалуйста, введите фамилию')->label('Фамилия'); ?>
        <?php echo $form->field($model, 'birthdate')->textInput()->hint('Пожалуйста, введите дату рождения')->label('Дата рождения'); ?>
        <?php echo $form->field($model, 'rating')->textInput()->hint('Пожалуйста, введите рейтинг')->label('Рейтинг'); ?>
               
        <?php echo Html::submitButton('Сохранить', ['name' => 'save', 'class' => 'btn btn-primary']); ?>
        <?php echo Html::resetButton('Очистить', ['class' => 'btn btn-danger']); ?>
        
        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-lg-12">
        <hr>
        <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
    </div>   
</div>  