<?php

/* @var $model frontend\models\Subscribe */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Form';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->session->hasFlash('subscribeStatus')) {
   echo Yii::$app->session->getFlash('subscribeStatus');
}

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">          
        <form method="post" class="form-horizontal">    
            <div class="form-group">
                <h3>Email:</h3>
                
                <div class="col-lg-4">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                
                <div class="col-lg-12"><br></div>
                
                <div class="col-lg-12">
                    <input type="submit" value="Submit" class="btn btn-default">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
                
                <div class="col-lg-12">
                    <hr>
                    <a class="btn btn-info" href="<?php echo Url::home() ?>">Вернуться на главную</a>
                </div>
            </div>
        </form>
    </div>
</div>





