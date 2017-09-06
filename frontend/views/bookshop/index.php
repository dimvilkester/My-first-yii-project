<?php
/* @var $this yii\web\View */
/* @var $bookList[] frontend\models\Book */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Bookshop';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>    
        
        <?php foreach ($bookList as $book): ?>
            <div class="col-lg-6">
                <h3><?php echo $book->name; ?></h3>

                <p><?php echo $book->getPublisherName();?></p>

                <p><?php echo $book->getDatePublished(); ?></p>
                
                <?php foreach ($book->getAuthors() as $author): ?>
                    <p><?php echo $author->getFullName(); ?></p>
                <?php endforeach; ?>
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
