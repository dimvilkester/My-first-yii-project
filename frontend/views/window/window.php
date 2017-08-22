<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'To order Window';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->session->hasFlash('windowStatus')) {
   echo Yii::$app->session->getFlash('windowStatus');
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
                    <h3>Ширина (от 70 до 210 см):</h3>
                    <input type="text" name="width" class="form-control" placeholder="Width">
                </div>
                
                <div class="col-lg-12">
                    <h3>Высота (от 100 до 200 см):</h3>
                    <input type="text" name="height" class="form-control" placeholder="Height">
                </div>
                
                <div class="col-lg-12">
                    <h3>Количество камер:</h3>
                    
                    <div class="radio">
                        <label><input type="radio" name="camera" value="1">1</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="camera" value="2">2</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="camera" value="3">3</label>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h3>Общее количество створок:</h3>
                    <input type="text" name="leaf" class="form-control" placeholder="Number Leaf">
                </div>
                
                <div class="col-lg-12">
                    <h3>Количество поворотных створок:</h3>
                    <input type="text" name="turnLeaf" class="form-control" placeholder="Turn leaf">
                </div>
                
                <div class="col-lg-12">
                    <h3>Цвет:</h3>
                    <select required name="color" class="form-control">
                        <option disabled selected>Выберите из списка</option>
                        <option value="1">Черный</option>
                        <option value="2">Белый</option>
                        <option value="3">Коричневый</option>
                    </select>
                </div>
                
                 <div class="col-lg-12">
                    <h3>Наличие подоконника:</h3>
                    <label class="checkbox-inline"><input type="checkbox" name="windowSill" value="1">Да</label>
                    <label class="checkbox-inline"><input type="checkbox" name="windowSill" value="0">Нет</label>
                </div>
                                
                 <div class="col-lg-12">
                    <h3>Email заказчика:</h3>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div> 
                
                <div class="col-lg-12">
                    <h3>Имя заказчика:</h3>
                    <input type="text" name="name" class="form-control" placeholder="Name">
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





