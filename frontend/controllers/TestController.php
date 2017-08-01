<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller
{

    public function actionIndex(){
        $max = Yii::$app->params['maxNewsInList'];
        
        $list = Test::getNewsList($max);
        return $this->render('index', [
            'list'=>$list,
        ]);
    }
    
    public function actionView($id){
        $item = Test::getNewsItem($id);
        
        return $this->render('view', [
            'item'=>$item,
        ]);
    }
    
    public function actionMail() {
        $result = Yii::$app->mailer->compose()
                ->setFrom('kiddrtest@gmail.ru')
                ->setTo('kiddrtest@gmail.ru')
                ->setSubject('Hello World')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();      
        var_dump($result);
        die;
    }
    
    public function actionCount() {
    
        $count = Test::getCountNews();

        return $this->render('countnews', [
            'count'=>$count,
        ]);
    }
}