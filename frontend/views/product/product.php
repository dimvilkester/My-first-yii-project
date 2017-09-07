<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Add product';
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
        
        <?php echo $form->field($model, 'name')->textInput()->hint('Пожалуйста, укажите наименование товара')->label('Наименование товара'); ?>
        <?php echo $form->field($model, 'code')->textInput()->hint('Пожалуйста, укажите код товара')->label('Код товара'); ?>
        <?php echo $form->field($model, 'colour')->textInput()->hint('Пожалуйста, укажите цвет')->label('Цвет'); ?>
        <?php echo $form->field($model, 'price')->textInput()->hint('Пожалуйста, укажите цену')->label('Цена'); ?>
        <?php echo $form->field($model, 'description')->textInput()->hint('Пожалуйста, укажите описание товара')->label('Описание товара'); ?>
        <?php echo $form->field($model, 'characteristic')->textInput()->hint('Пожалуйста, укажите линию')->label('Линия'); ?>
        <?php echo $form->field($model, 'size')->textInput()->hint('Пожалуйста, укажите размер')->label('Размер'); ?>
        <?php echo $form->field($model, 'category_id')->textInput()->hint('Пожалуйста, выберите категорию')->label('Категория'); ?>
        <?php echo $form->field($model, 'manufacturer_id')->textInput()->hint('Пожалуйста, выберите производителя')->label('Производитель'); ?>
        <?php echo $form->field($model, 'status')->textInput()->hint('Пожалуйста, выберите статус (опубликовано/не опубликовано)')->label('Статус'); ?>
               
        <?php echo Html::submitButton('Сохранить', ['name' => 'save', 'class' => 'btn btn-primary']); ?>
        <?php echo Html::resetButton('Очистить', ['class' => 'btn btn-danger']); ?>
        
        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-lg-12">
        <hr>
        <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
    </div>   
</div>         