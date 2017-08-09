<?php

namespace console\models;

use Yii;

class Sender 
{
    public static function run($subscribersList, $newsList){
        
        foreach ($subscribersList as $subscribers) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                ->setFrom('kiddrtest@gmail.com')
                ->setTo($subscribers['email'])
                ->setSubject('Рассылка новостей')
                ->send();
        var_dump($result);
        } 
    }
}