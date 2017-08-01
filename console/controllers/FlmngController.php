<?php

namespace console\controllers;

use Yii;

class FlmngController extends \yii\console\Controller
{
    public function actionTimelog() {
        
        Yii::$app->formatter->locale = 'ru-RU';
        $timeStamp = Yii::$app->formatter->asDate('now') ."\n";
        
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