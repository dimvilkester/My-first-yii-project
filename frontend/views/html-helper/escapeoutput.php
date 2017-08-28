<?php

/* @var $comments array*/

use yii\helpers\Html;

echo Html::tag('h2', 'Hello escape output');
?>

<?php foreach ($comments as $comment): ?>
<?php echo Html::tag('h4', Html::encode($comment['author']));?>
<?php echo Html::tag('p', Html::encode($comment['text']));?>
<hr>
<?php endforeach; ?>


 
