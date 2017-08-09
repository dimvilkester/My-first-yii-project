<?php

namespace console\controllers;

use Yii;
use console\models\Associate;
use console\models\Sender;

class MailerController extends \yii\console\Controller
{
    public function actionSend() {
        $newsList = News::getList();
        $subscribersList = Subscriber::getList();
        
        return Sender::run($subscribersList, $newsList);
    }
    
    public function actionSendpay() {
        $associateList = Associate::getList();
        return Sender::running($associateList);
    }    
    
    public function actionSendForExample() {
        $result = Yii::$app->mailer->compose()
                ->setFrom('kiddrtest@gmail.com')
                ->setTo('kiddrtest@gmail.com')
                ->setSubject('Hello World')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();      
        var_dump($result);
        die;
    }
}

