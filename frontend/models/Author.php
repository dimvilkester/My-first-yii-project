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
     * @inheritdoc
     */
    public static function tableName() {
        return 'author';
    }

    /**
     * @inheritdoc
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