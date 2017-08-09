<?php

use yii\db\Migration;

/**
 * Handles adding salary to table `associate`.
 */
class m170809_084906_add_salary_column_to_associate_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('associate', 'salary', $this->integer(11));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('associate', 'salary');
    }
}
