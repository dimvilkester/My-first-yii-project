<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Employee extends Model 
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';    
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $birthday;
    public $city;
    public $startDateWork;
    public $position;
    public $idCode;  
    public $email;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'birthday', 'city', 'startDateWork', 'position', 'idCode', 'email'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }
    
    public function rules() {
        return [
            [['firstName', 'lastName', 'email', 'startDateWork', 'position'], 'required'],
            [['email'], 'email'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birthday', 'startDateWork'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string', 'max' => 10],
        ];        
    }
    
    public function save() {
        
        $sql = "INSERT INTO employee "
                . "(id, firstname, lastname, middlename, date_of_birth, city, start_date_of_work, position, id_code, email) "
                . "VALUES (NULL, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', '{$this->birthday}', '{$this->city}', '{$this->startDateWork}', '{$this->position}', '{$this->idCode}', '{$this->email}')";
        
        return Yii::$app->db->createCommand($sql)->execute();
    }
}