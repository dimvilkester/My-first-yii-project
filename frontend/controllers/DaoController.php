<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class DaoController extends Controller {

    public function actionIndex() {

        //1. Подключение к базе данных
        $db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2db',
            'username' => 'yii2user',
            'password' => '111111',
            'charset' => 'utf8',
        ]);


        //2. Создание объекта команды
        $sql = "SELECT * FROM employee;";

        $command = new \yii\db\Command([
            'db' => $db,
            'sql' => $sql,
        ]);

        //3. Выполнение команды
        $arrayWithResults = $command->queryAll();

        ///////////////////////////////////////
        //Анологичная работа с использованием компонента приложения db

        $arrayWithResults2 = Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('index', [
            'arrayWithResults' => $arrayWithResults,
            'arrayWithResults2' => $arrayWithResults2,
        ]);
    }

    public function actionConnectionDb1Db2() {

        // Подключение к первой базе данных db
        $sql = "SELECT * FROM news;";

        $result1 = Yii::$app->db->createCommand($sql)->queryAll();

        // Подключение ко второй базе данных db2
        $sql = "SELECT * FROM city;";

        $result2 = Yii::$app->db2->createCommand($sql)->queryAll();

        return $this->render('connectiondb1db2', [
            'result1' => $result1,
            'result2' => $result2,
        ]);
    }

    public function actionQuery(){
        
        #Для SELECT
        
        //1. Запрос queryAll (Выбрать все)
        $sql1 = "SELECT * FROM news;";
        $result1 = Yii::$app->db->createCommand($sql1)->queryAll(); 
        
        echo '<pre>';
        print_r($result1);
        echo '</pre>';
        
        echo '<hr >';
        
        //2. Запрос queryColumn (Выбрать одну колонку)
        $sql2 = "SELECT title FROM news;";
        $result2 = Yii::$app->db->createCommand($sql2)->queryColumn();   
        
        echo '<pre>';
        print_r($result2);
        echo '</pre>';
        
        echo '<hr >';
        
        //3. Запрос queryOne (Выбрать одну строку)
        $sql3 = "SELECT * FROM news WHERE id = 3;";
        $result3 = Yii::$app->db->createCommand($sql3)->queryOne();   
        
        echo '<pre>';
        print_r($result3);
        echo '</pre>';
        
        echo '<hr >';
        
        //4. Запрос queryScalar (Возвращает одно значение.)
        //Например подсчет количества строк в таблице новости. Вернет 3
        $sql4 = "SELECT COUNT(*) as count FROM news;";
        $result4 = Yii::$app->db->createCommand($sql4)->queryScalar();   
        
        echo '<pre>';
        print_r($result4);
        echo '</pre>';
        
        echo '<hr >';
        
        #Для INSERT, UPDATE, DELETE вызываем метод execute()
        #execute говорит что просто необходимо выполнить sql запрос
        
        //1. DELETE      
        $sql1 = "DELETE FROM news WHERE id = 3;";
        $result1 = Yii::$app->db->createCommand($sql1)->execute();   
        
        echo '<pre>';
        print_r($result1);
        echo '</pre>';
        
        echo '<hr >';
        
        //1. INSERT     
        $sql2 = "INSERT INTO news (id, title, content, status) "
                . "VALUES (NULL, 'Hello World!', NULL, 1);";
        $result2 = Yii::$app->db->createCommand($sql2)->execute();   
        
        echo '<pre>';
        print_r($result2);
        echo '</pre>';
        
        echo '<hr >';
        
        //1. UPDATE     
        $sql3 = "UPDATE news "
                . "SET title = 'Alfred Schmidt', content = 'Frankfurt', status = '0' "
                . "WHERE id = 1;";
        $result3 = Yii::$app->db->createCommand($sql3)->execute();   
        
        echo '<pre>';
        print_r($result3);
        echo '</pre>';
        
        echo '<hr >';
    }
 
}
