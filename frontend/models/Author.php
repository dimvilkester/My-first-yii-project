<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "author".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property integer $rating
 */
class Author extends ActiveRecord {

    /**
     * @return name table
     */
    public static function tableName() {
        return '{{author}}';
    }

    /**
     * @return array. Возвращает массив с правилами валидации
     */
    public function rules() {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string'],
            [['birthdate'], 'date', 'format' => 'php:Y-m-d'],
            [['rating'], 'integer'],
        ];
    }
    
    /**
     * @return array
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'birthdate' => 'Birthdate',
            'rating' => 'Rating',
        ];
    }
    
        
     /**
     * @return string
     */    
    public function getFullName() {
        if ($this) {
            
            $fullname = $this->first_name.' '.$this->last_name;
            
            return $fullname;
        }
        
        return 'Author not set';
    }

}