<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Product;

class ProductController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCreate() {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('info', 'add product success!');

            return $this->refresh();
        }

        return $this->render('product', [
            'model' => $model,
        ]);
    }

}
