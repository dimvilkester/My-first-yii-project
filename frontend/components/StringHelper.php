<?php

namespace frontend\components;
use Yii;

class StringHelper 
{
    private $limitSymbol;
    private $limitWords;
    
    public function __construct() {
        $this->limitSymbol = Yii::$app->params['limitSymbol'];
        $this->limitWords = Yii::$app->params['limitWords'];
    }

    public function cutSymbol($string, $limitSymbol = NULL) {
        if ($limitSymbol === NULL) {
            $limitSymbol = $this->limitSymbol;
        }
        
        if ($limitSymbol < iconv_strlen($string) && $limitSymbol > 10) {
            $string = substr($string, 0, $limitSymbol);
            $string = rtrim($string, "!,.-:;");
            $string = substr($string, 0, strrpos($string, ' ')) .'...';
            if ($string === false) {
                return $string = 'не найдено';
            }
        }
        
        return $string;
    }
    
    public function cutWords($string, $limitWords = NULL) {
        if ($limitWords === NULL) {
            $limitWords = $this->limitWords;
        }
        
        $words = explode(' ', $string);

        if(count($words) > $limitWords && $limitWords > 4) {
            $string = implode(' ', array_slice($words, 0, $limitWords)) .'...';
        }

        return $string;
    }
}

