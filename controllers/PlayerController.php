<?php

namespace app\controllers;
use app\models\Player;
use yii;

class PlayerController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Player;

        if($model->load(Yii::$app->request->post()) && $model->save()
        ){
            return $this->redirect(['/player/index']);
        }
        return $this->render('create',['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Player::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('player','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/player/index']);
    }

    public function actionIndex()
    {
        $players = Player::find()->orderBy('fullname')->all();
        return $this->render('index',['players'=>$players]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView($id)
    {
        $model = Player::findOne($id);

        return $this->render('view',compact('model'));
    }

}
