<?php

use yii\helpers\Html;


echo Html::tag('h2', 'Hello Helper Controller');

$array = [
  '1' => 'Berlin',  
  '2' => 'London',  
  '3' => 'Paris',  
  '4' => 'Madrid',  
  '5' => 'Manchester',  
];

echo Html::DropDownList('city_dropdown', [], $array);

echo Html::checkboxList('city_checkbox', [], $array);

echo Html::radioList('city_radio', [], $array);

echo Html::img('@gallary/salad.jpg', ['alt' => 'Это Салат!'])


?>


 
