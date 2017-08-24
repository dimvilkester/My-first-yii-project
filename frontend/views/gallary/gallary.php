<?php
/*
 * @var $this yii\web\View;
 */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\GallaryAsset;

$this->title = 'Gallary';
$this->params['breadcrumbs'][] = $this->title;

GallaryAsset::register($this);
$this->registerJsFile('@web/js/gallary/script.js', ['depends' => [
    GallaryAsset::className()
]]);
?>

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="portfolioFilter">

            <a href="#" data-filter="*" class="current">All Categories</a>
            <a href="#" data-filter=".people">People</a>
            <a href="#" data-filter=".places">Places</a>
            <a href="#" data-filter=".food">Food</a>
            <a href="#" data-filter=".objects">Objects</a>

        </div>

        <div class="portfolioContainer">
            <div class="objects">
                <img src="/files/gallary/watch.jpg" alt="image">
            </div>

            <div class="people places">
                <img src="/files/gallary/surf.jpg" alt="image">
            </div>	

            <div class="food">
                <img src="/files/gallary/burger.jpg" alt="image">
            </div>

            <div class="people places">
                <img src="/files/gallary/subway.jpg" alt="image">
            </div>
        
            <div class="places objects">
                <img src="/files/gallary/trees.jpg" alt="image">
            </div>

            <div class="people food objects">
                <img src="/files/gallary/coffee.jpg" alt="image">
            </div>

            <div class="food objects">
                <img src="/files/gallary/wine.jpg" alt="image">
            </div>	

            <div class="food">
                <img src="/files/gallary/salad.jpg" alt="image">
            </div>	
        </div>
    </div>

    <div class="row"    
         <div class="col-lg-12">
            <hr>
            <a class="btn btn-info" href="<?php echo Url::home() ?>">Вернуться на главную</a>
        </div>
    </div>                                 
</div>