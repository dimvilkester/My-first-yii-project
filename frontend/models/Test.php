<?php

namespace frontend\models;

use Yii;

class Test {
    
    public static function getNewsList($max){
        
        $max = intval($max);
        
        $sql = 'SELECT * FROM news LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        if (!empty($result) && is_array($result)){
            foreach ($result as &$item) {
                //$item['content'] = Yii::$app->stringHelper->cutSymbol($item['content'], 40);
                $item['content'] = Yii::$app->stringHelper->cutWords($item['content'], 5);            
            }
        }
        
        return $result; 
    }
    
    public static function getNewsItem($id){
        
        $id = intval($id);
        
        $sql = "SELECT * FROM news WHERE id = $id";
        
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
    /**
     * 
     * @return integer
     */
    
    public static function getCountNews(){
        //Вариант 1. Подсчет количества строк sql
        //$sql = 'SELECT count(id) FROM news';
        //return Yii::$app->db->createCommand($sql)->queryOne();
        
        //Вариант 1. Подсчет количества строк php
        $sql = 'SELECT * FROM news';
        $arrRow = Yii::$app->db->createCommand($sql)->queryAll();
        
        if (!isset($arrRow) && !is_array($arrRow)){
            echo "Ошибка";
        } 
        
        $result = count($arrRow);
        return $result;
    }
}