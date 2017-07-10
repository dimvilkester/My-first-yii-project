<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $item['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">          
        <div class="col-lg-12">
            <p><?php echo $item['content'];?></p>
            <p><a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl(['test/index'])?>">Вернуться к списку новостей</a></p>
        </div>
    </div>
</div>





