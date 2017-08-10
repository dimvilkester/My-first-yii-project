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
        
        $data = Yii::$app->formatter->asDate('now', 'php:d.m.Y') ."\n";
        
        foreach ($associateList as $associate) {
            $result = Yii::$app->mailer->compose('/mailer/associate', [
                'associate' => $associate,
                'data' => $data,
                
            ])
                ->setFrom('kiddrtest@gmail.com')
                ->setTo($associate['email'])
                ->setSubject('Начисление зарплаты')
                ->send();         
        }

        self::log();

    }
    
    public static function log() {
        
        Yii::$app->formatter->locale = 'ru-RU';
        $timeStamp = Yii::$app->formatter->asDate('now') .' Ежемесячной зачислении заработной платы бригаде №1' ."\n";
        
        $fileName = '/var/www/project/frontend/web/log.txt';

        if(!$fileName) {
            echo 'Ошибка открытия файла';
        } else {
            // Открываем текстовый файл для записи
            $logTime = fopen($fileName, 'ab') or die('Не удалось создать файл');

            // Записываем текущую дату
            fwrite($logTime, $timeStamp); 

            // Закрываем текстовый файл
            fclose($logTime);
        }
    }
    
}