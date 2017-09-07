<?php
/* @var $this yii\web\View */
/* @var $productList[] frontend\models\Product*/

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Store';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>    
        
        <?php foreach ($productList as $product): ?>
            <div class="col-lg-6">
                <h3><?php echo Html::encode($product->name); ?></h3>
                <p><?php echo Html::encode($product->code); ?></p>
                <p><?php echo Html::encode($product->colour); ?></p>
                <p><?php echo Html::encode($product->price) .' $'; ?></p>
                <p><?php echo Html::encode($product->characteristic); ?></p>
                <p><?php echo Html::encode($product->size); ?></p>
                <p><?php echo Html::encode($product->getCategoryName()); ?></p>
                <p><?php echo Html::encode($product->getManufacturerName()); ?></p>
            </div>
        <?php endforeach; ?>    
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <hr>
            <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
        </div>   
    </div>   
</div>         