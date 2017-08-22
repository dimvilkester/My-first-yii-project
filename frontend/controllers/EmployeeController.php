<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Animal;
use frontend\models\example\Human;

class EmployeeController extends Controller {
    
    public function actionIndex() {
        $employee = new Employee;
        
        $employee->firstName = 'Alex';
        $employee->lastName = 'Smith';
        $employee->middleName = 'Jon';
        $employee->salary = 1000;
        
        echo "<pre>";
        var_dump($employee);
        echo "</pre>";
        
        echo $employee['firstName'];
        
        echo '<hr>';
        
        foreach ($employee as $attributes => $value) {
            echo "<p>". $attributes . " - " . $value ."</p>";
        }
        
        
        $array = $employee->toArray();
        
        echo "<pre>";
        var_dump($array);
        echo "</pre>";     
        
        
    }
    
    public function actionTest() {
        $human = new Human();
        $human->walk();
        echo '<br>';
        $animal = new Animal();
        $animal->walk();
    }
    
    public function actionRegister() {
        
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {

            $model->attributes = $formData;
            
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('info', 'Register completed!');
            }      

        }
        
        return $this->render('register', [
            'model' => $model,
        ]);

    }
    
    public function actionUpdate() {
        
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            
            $model->attributes = $formData;         
           
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('info', 'Update completed!');
            }

        }
        
        return $this->render('update', [
            'model' => $model,
        ]);

    }  
    
}