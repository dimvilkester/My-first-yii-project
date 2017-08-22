<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Window extends Model 
{
    public $width;
    public $height;
    public $camera;
    public $leaf;
    public $turnLeaf;
    public $color;
    public $windowSill;
    public $email;
    public $name;
    
    public function rules() {
        return [
            [['width', 'height', 'camera', 'leaf', 'turnLeaf', 'color', 'windowSill', 'email', 'name'], 'required'],
            [['turnLeaf', 'camera', 'color', 'windowSill'], 'integer'],
            [['width'], 'double', 'min' => '70', 'max' => '210'],
            [['height'], 'double', 'min' => '100', 'max' => '200'],
            [['camera', 'color'], 'in', 'range' => [1, 2, 3]],          
            [['windowSill'], 'in', 'range' => [1, 2]],          
            [['leaf'], 'integer', 'min' => 1],
            ['leaf', 'compare',
                'compareAttribute' => 'turnLeaf',
                'operator' => '>=',
                'message' => Yii::t('app', 'Количество створок - целое число, не больше общего количества створок'),
            ],
            [['email', 'name'], 'string'],
            [['email'], 'email'],
        ];
    }
    
    public function save() {
        $sql = "INSERT INTO window (id, width, height, camera, leaf, turnLeaf, color, windowSill, email, name) "
                . "VALUES (NULL, '{$this->width}', '{$this->height}', '{$this->camera}', '{$this->leaf}', '{$this->turnLeaf}', '{$this->color}', '{$this->windowSill}', '{$this->email}', '{$this->name}')";
        
        return Yii::$app->db->createCommand($sql)->execute();
    }
    
    public static function getList() {
        $sql = 'SELECT width, height, camera, leaf, turnLeaf, color, windowSill, email, name FROM window';
        return Yii::$app->db->createCommand($sql)->queryAll(); 
    }
  
    public static function run($windowList) {

        $result = Yii::$app->mailer->compose('window/orderwindow', [
                    'windowList' => $windowList,
                ])
                ->setFrom($windowList['email'])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('Заказ окна')
                ->send();
        
        var_dump($result);
    }

}