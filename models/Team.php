<?php

namespace app\models;
use app\models\User;
use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property int $player_id
 * @property string $team_name
 * @property string $team_captain
 *
 * @property Player $player
 * @property Tournament[] $tournaments
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player_id', 'team_name', 'team_captain'], 'required'],
            [['player_id'], 'integer'],
            [['team_name', 'team_captain'], 'string', 'max' => 200],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['player_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'player_id' => 'Player ID',
            'team_name' => 'Team Name',
            'team_captain' => 'Team Captain',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::className(), ['id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournaments()
    {
        return $this->hasMany(Tournament::className(), ['team_id' => 'id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
