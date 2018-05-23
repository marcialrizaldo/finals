
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `team`.
 */
class m180523_022458_create_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'player_id' => $this->integer(4)->notNull(),
            'team_name' => $this->string(200)->notNull(),
            'team_captain' => $this->string(200)->notNull(),
        ]);
        $this->createIndex(
            'idx-team-player_id', 
            'team','player_id'
        );
        $this->addForeignKey(
            'fk-team-player',
            'team', 'player_id',
            'player', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('team');
    }
}
