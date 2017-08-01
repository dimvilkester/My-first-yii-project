<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Текущая дата';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">          
        <div class="col-lg-12">
            <p>Текущая дата: <?php echo $result;?></p>
            <p><a class="btn btn-info" href="<?php echo Yii::$app->urlManager->createUrl([''])?>">Вернуться на главную</a></p>
        </div>
    </div>
</div>





