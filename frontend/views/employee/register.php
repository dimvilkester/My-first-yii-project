<?php

/* @var $model frontend\models\Employee */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Register employee';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->session->hasFlash('employeeStatus')) {
   echo Yii::$app->session->getFlash('employeeStatus');
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
                
                <div class="col-lg-12">
                    <h3>First name:</h3>
                    <input type="text" name="firstName" class="form-control" placeholder="First name">
                </div>
                                
                <div class="col-lg-12">
                    <h3>Last name:</h3>
                    <input type="text" name="lastName" class="form-control" placeholder="Last name">
                </div>
                
                <div class="col-lg-12">
                    <h3>Middle name:</h3>
                    <input type="text" name="middleName" class="form-control" placeholder="Middle name">
                </div>
                
                <div class="col-lg-12">
                    <h3>Birthday:</h3>
                    <input type="text" name="birthday" class="form-control" placeholder="Birthday">
                </div> 
                
                <div class="col-lg-12">
                    <h3>City:</h3>
                    <select required name="city" class="form-control">
                        <option disabled selected>Выберите из списка</option>
                        <option value="1">Москва</option>
                        <option value="2">Санкт-Петербург</option>
                        <option value="3">Новосибирск</option>
                        <option value="4">Казань</option><
                        <option value="5">Калининград</option>
                    </select>
                </div>
                
                <div class="col-lg-12">
                    <h3>Start date of work:</h3>
                    <input type="text" name="startDateWork" class="form-control" placeholder="Start date of work">
                </div>                
                
                <div class="col-lg-12">
                    <h3>Position:</h3>
                    <input type="text" name="position" class="form-control" placeholder="Position">
                </div>
 
                 <div class="col-lg-12">
                    <h3>Id code:</h3>
                    <input type="text" name="idCode" class="form-control" placeholder="Id code">
                </div>               
                
                <div class="col-lg-12">
                    <h3>Email:</h3>
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