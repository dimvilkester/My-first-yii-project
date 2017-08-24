<?php

namespace frontend\controllers;

use yii\web\Controller;

class GallaryController extends Controller 
{
    public function actionIndex() {
        return $this->render('gallary');
    }
}

