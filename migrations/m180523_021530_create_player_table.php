<?php

use yii\db\Migration;

/**
 * Handles the creation of table `player`.
 */
class m180523_021530_create_player_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('player', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(200)->notNull(),
            'IGN' => $this->string(200)->notNull(),
            'country' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('player');
    }
}
