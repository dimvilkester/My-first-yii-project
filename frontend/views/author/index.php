<?php
/* @var $this yii\web\View */
/* @var $authorList[] frontend\models\Author */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'List author';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= Html::encode($this->title) ?></h1>
            <p><a class="btn btn-primary btn-lg" href="<?php echo Url::to(['author/create']);?>">Create new author</a></p>
        </div>    
        
        <div class="col-lg-12">
            <table class="table table-condensed">
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Дата рождения</th>
                    <th>Рейтинг автора</th>
                    <th>Редактор</th>
                </tr>
                <?php foreach ($authorList as $author): ?>
                    <tr>
                        <td><?php echo $author->id; ?></td>
                        <td><?php echo $author->first_name; ?></td>
                        <td><?php echo $author->last_name;?></td>
                        <td><?php echo $author->birthdate;?></td>
                        <td><?php echo $author->rating;?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo Url::to(['author/update', 'id' => $author->id]);?>">Update</a>
                            <a class="btn btn-danger" href="<?php echo Url::to(['author/delete', 'id' => $author->id]);?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>           
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <hr>
            <?php echo Html::a('Вернуться на главную', Url::home(), ['class' => 'btn btn-info']); ?>
        </div>   
    </div>   
</div>  