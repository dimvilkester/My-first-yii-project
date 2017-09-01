<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;


$emails = ArrayHelper::getColumn($list, 'email');

echo '<p>Можете связаться с нами: '. implode(', ', $emails) .'</p>'; 

$emailsList = ArrayHelper::map($list, 'firstname', 'email');

echo Html::DropDownList('email_dropdown', [], $emailsList);
        
?>


 
