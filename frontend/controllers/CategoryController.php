<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Category;

class CategoryController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCreate() {
        $model = new Category();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('info', 'add category success!');

            return $this->refresh();
        }

        return $this->render('category', [
            'model' => $model,
        ]);
    }

}
