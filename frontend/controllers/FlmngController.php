<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class FlmngController extends Controller
{
    public function actionTime() {
        
        //$result = date('Y M d H:i:s');
        
        Yii::$app->formatter->locale = 'ru-RU';
        $result = Yii::$app->formatter->asDate('now');

        return $this->render('time', [
            'result'=>$result,
        ]);
    }
}