<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Subscribe extends Model
{
    public $email;
    
    public function rules() {
        return [
            // атрибут required указывает, что email обязательны для заполнения
            [['email'], 'required'],
            // атрибут email указывает, что в переменной email должен быть корректный адрес электронной почты
            [['email'], 'email'],
        ];
    }
    
    public function save() {
        
        $sql = "INSERT INTO subscriber (id, email) VALUES (NULL, '{$this->email}')";
        
        return Yii::$app->db->createCommand($sql)->execute();
    }
}

