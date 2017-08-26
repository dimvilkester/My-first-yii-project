<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use frontend\models\Window;

class WindowController extends Controller
{
    public function actionOrder() {
        
        $model = new Window();
                
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {

            $model->attributes = $formData;
            
            if ($model->validate() && $model->save()) { 
                               
                $model->run($model['attributes']);
                
                Yii::$app->session->setFlash('info', 'To order window completed!');
            }      

        }
         
        return $this->render('window', [
            'model' => $model,
        ]);

    }
    
    public function actionMail() { 
        
        $windowList = Window::getList();
        
        return Window::run($windowList);

    }
}