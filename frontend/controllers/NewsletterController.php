<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use frontend\models\Subscribe;

class NewsletterController extends Controller
{
    public function actionSubscribe() {
        
        $formData = Yii::$app->request->post();
        $model = new Subscribe();

        // Проверяем каким методом отправлены данные. Если POST тогда выполняем условие.
        if (Yii::$app->request->isPost) {
            
            $model->email = $formData['email'];
            
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('info', 'Subscribe completed!!!');
            }
        }
               
        return $this->render('subscribe', [
            'model' => $model
        ]);

    }
}
