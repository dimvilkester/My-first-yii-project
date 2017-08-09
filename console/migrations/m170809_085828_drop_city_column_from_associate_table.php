<?php

use yii\db\Migration;

/**
 * Handles dropping city from table `associate`.
 */
class m170809_085828_drop_city_column_from_associate_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('associate', 'city');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('associate', 'city', $this->string(255));
    }
}
