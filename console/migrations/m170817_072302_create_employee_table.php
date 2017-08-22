<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m170817_072302_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(255),
            'lastname' => $this->string(255),
            'middlename' => $this->string(255),
            'date_of_birth' => $this->date(),
            'city' => $this->integer(11),
            'start_date_of_work' => $this->date(),
            'work_experience' => $this->integer(3),
            'position' => $this->string(255),
            'department_number' => $this->integer(11),
            'id_code' => $this->string(255)->unique(),
            'email' => $this->string(255)->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
