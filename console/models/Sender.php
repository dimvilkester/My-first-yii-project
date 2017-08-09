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
    
    public static function running($associateList){
        
        $timeStamp = Yii::$app->formatter->asDate('now', 'php:d.m.Y') ."\n";
        
        foreach ($associateList as $associate) {
            $result = Yii::$app->mailer->compose('/mailer/associate', [
                'associate' => $associate,
                'timeStamp' => $timeStamp,
                
            ])
                ->setFrom('kiddrtest@gmail.com')
                ->setTo($associate['email'])
                ->setSubject('Начисление зарплаты')
                ->send();
            
            var_dump($result);
        }

    }

}