<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Add category';
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
        
        <?php echo $form->field($model, 'name')->textInput()->hint('Пожалуйста, введите название категории')->label('Название категории'); ?>
        <?php echo $form->field($model, 'description')->textInput()->hint('Пожалуйста, укажите описание категории товара')->label('Описание категории товара'); ?>
               
        <?php echo Html::submitButton('Сохранить', ['name' => 'save', 'class' => 'btn btn-primary']); ?>
        <?php echo Html::resetButton('Очистить', ['class' => 'btn btn-danger']); ?>
        
        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-lg-12">
        <hr>
        <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
    </div>   
</div>         
