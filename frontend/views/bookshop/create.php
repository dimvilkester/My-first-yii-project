<?php
/* @var $this yii\web\View */
/* @var $book frontend\models\Book */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Add book';
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
        
        <?php echo $form->field($model, 'name')->textInput()->hint('Пожалуйста, введите название книги')->label('Название'); ?>
        <?php echo $form->field($model, 'isbn')->textInput()->hint('Пожалуйста, введите ISBN')->label('ISBN'); ?>
        <?php echo $form->field($model, 'date_published')->textInput()->hint('Пожалуйста, введите дату публикации')->label('Дата публикации'); ?>
        <?php echo $form->field($model, 'publisher_id')->textInput()->hint('Пожалуйста, укажите автора')->label('Автор'); ?>
               
        <?php echo Html::submitButton('Сохранить', ['name' => 'save', 'class' => 'btn btn-primary']); ?>
        <?php echo Html::submitButton('Сохранить и выйти', ['name' => 'saveout', 'class' => 'btn btn-primary']); ?>
        <?php echo Html::resetButton('Очистить', ['class' => 'btn btn-danger']); ?>
        
        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-lg-12">
        <hr>
        <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
    </div>   
</div>         
