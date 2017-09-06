<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Book;

class BookshopController extends Controller
{
    public function actionIndex()
    {       
        /*
         * $query = Book::find();
         * $query->where(['publisher_id' => 1]);
         * $query->orderBy('date_published');
         * $query->limit(3);
         * $bookList = $query->all();
         */
        
        //Тоже самое, только используя шаблон проектирования текучий интерфейс
        
        //$conditions = ['publisher_id' => 1];
        //$bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(3)->all();
        $bookList = Book::find()->orderBy('date_published')->limit(6)->all();
                
        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }
    
    public function actionCreate(){
        $model = new Book();
       
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            Yii::$app->session->setFlash('info', 'add book success!');

            return $this->refresh();
            //return $this->redirect(['bookshop/index']);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }
}