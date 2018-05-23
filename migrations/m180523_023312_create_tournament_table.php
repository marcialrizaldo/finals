<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tournament`.
 */
class m180523_023312_create_tournament_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tournament', [
            'id' => $this->primaryKey(),
            'team_id' => $this->integer(4)->notNull(),
            'event_name' => $this->string(200)->notNull(),
            'prize_pool' => $this->money()->notNull(),
        ]);
        $this->createIndex(
            'idx-tournament-team_id', 
            'tournament','team_id'
        );
        $this->addForeignKey(
            'fk-tournament-team',
            'tournament', 'team_id',
            'team', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tournament');
    }
}
