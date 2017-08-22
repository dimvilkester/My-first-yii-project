<?php

use yii\db\Migration;

/**
 * Handles the creation of table `window`.
 */
class m170818_091409_create_window_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('window', [
            'id' => $this->primaryKey(),
            'width' => $this->double(3),
            'height' => $this->double(3),
            'camera' => $this->integer(1),
            'leaf' => $this->integer(3),
            'turnLeaf' => $this->integer(3),
            'color' => $this->integer(3),
            'windowSill' => $this->integer(1),
            'email' => $this->string(50)->unique(),
            'name' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('window');
    }
}
