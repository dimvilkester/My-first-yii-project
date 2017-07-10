<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Свежие новости';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">     
        <?php foreach ($list as $item): ?>
        <div class="col-lg-6">
            <h2>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]);?>">
                    <?php echo $item['title'];?>
                </a>
            </h2>

            <p><?php echo $item['content'];?></p>

            <p><a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]);?>">Подробнее &raquo;</a></p>
        </div>
        <?php endforeach;?>
        
        <div class="col-lg-12">
            <hr>
            <p><a class="btn btn-info" href="<?php echo Yii::$app->urlManager->createUrl([''])?>">Вернуться на главную</a></p>
        </div>
    </div>
</div>






