<?php

use yii\db\Migration;

/**
 * Handles the creation of table `associate`.
 */
class m170809_081735_create_associate_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('associate', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(255),
            'date_of_birth' => $this->date(),
            'city' => $this->string(255),
            'start_date_of_work' => $this->date(),
            'work_experience' => $this->integer(3),
            'position' => $this->string(255),
            'department_number' => $this->integer(11),
            'id_code' => $this->integer(11)->unique(),
            'email' => $this->string(255)->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('associate');
    }
}
