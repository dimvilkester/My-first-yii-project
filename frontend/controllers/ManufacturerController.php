<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Manufacturer;

class ManufacturerController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCreate() {
        $model = new Manufacturer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('info', 'add manufacturer success!');

            return $this->refresh();
        }

        return $this->render('manufacturer', [
            'model' => $model,
        ]);
    }

}
