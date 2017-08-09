<?php

namespace console\models;

use Yii;

class Associate 
{  
    public static function getList(){
        $sql = 'SELECT fullname, email, salary FROM associate';
        return Yii::$app->db->createCommand($sql)->queryAll();      
    }
}

