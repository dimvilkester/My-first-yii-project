<?php

/* @var $list array*/

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

/**
 * Description of HtmlHelperController
 *
 * @author mr. Anderson
 */

class HtmlHelperController extends Controller
{
    public function actionDemo() {
       
        return $this->render('helperdemo');
    }
    
    public function actionArray() {
        
        //$max = Yii::$app->params['maxEmployeeInList'];
        
        $max = 4;
        
        $list = Employee::getEmployeeList($max);
       
        return $this->render('demo', [
            'list' => $list,
        ]);
    }
    
    /*
     * Пример Экранирования символов. Безопасность
     * Escape output
     */
    
    public function actionEscapeOutput() {
        
        $comments = [
            [
              'id' => 11,
              'author' => 'Jonny',
              'text' => 'Hello! I am Jonny',
            ],  
            [
              'id' => 12,
              'author' => 'Jimmy',
              'text' => 'Hello! I am Jimmy',
            ],  
            [
              'id' => 99,
              'author' => 'fsociety',
              'text' => '<b>Hello! I am fsociety</b><script>alert("I will steal you money")</script>',
            ],  
        ];
       
        return $this->render('escapeoutput', [
            'comments' => $comments,
        ]);
    }
}
