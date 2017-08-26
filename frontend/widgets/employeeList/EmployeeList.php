<?php

namespace frontend\widgets\employeeList;

use Yii;
use yii\base\Widget;
use frontend\models\Employee;

class EmployeeList extends Widget {

    public $max;

    public function init() {
        parent::init();
        if ($this->max === null) {
            $this->max = Yii::$app->params['maxEmployeeInList'];
        }
    }

    public function run() {
        $list = Employee::getEmployeeList($this->max);

        return $this->render('employeetable', [
                    'list' => $list,
        ]);
    }

}
