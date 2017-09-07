<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Product;

class StoreController extends Controller {

    public function actionIndex() {
        $productList = Product::find()->limit(2)->where(['status' => '1'])->all();

        return $this->render('index', [
            'productList' => $productList,
        ]);
    }

}
