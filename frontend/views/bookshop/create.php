<?php
/* @var $this yii\web\View */
/* @var $book frontend\models\Book */
/* @var $publisher array */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

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

        <?php echo $form->field($model, 'name')->textInput()->hint('Пожалуйста, введите название книги'); ?>
        <?php echo $form->field($model, 'isbn')->textInput()->hint('Пожалуйста, введите ISBN'); ?>
        
        <?= $form->field($model, 'date_published')->widget(
            DatePicker::className(), [
            // inline too, not bad
            'inline' => true,
            // modify template for custom rendering
            'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]);
        ?>
       
        <?php echo $form->field($model, 'publisher_id')->dropDownList($publisher); ?>
               
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
