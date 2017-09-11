<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Author;

class AuthorController extends Controller
{
    public function actionIndex()
    {
        $authorList = Author::find()->all();
        
        return $this->render('index', [
            'authorList' => $authorList,
        ]);
    }
        
    public function actionCreate()
    {
        $model = new Author();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('info', 'Create new author success!');

            return $this->redirect(['author/index']);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        /**
         * Cтатический метод модели findOne работает как объединенные 
         * методы find(), where(), one() и возвращает объект ActiveQuery.
         */
        $model = Author::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('info', 'Author update success!');

            return $this->redirect(['author/index']);
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }
    
    public function actionDelete($id)
    {
        $model = Author::findOne($id);
         
        if ($model->delete()) {
            Yii::$app->session->setFlash('info', 'Delete success!');
        } else {
            Yii::$app->session->setFlash('danger', 'Delete failed!');           
        }
        
        return $this->redirect(['author/index']);
    }
}
