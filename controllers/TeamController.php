<?php

namespace app\controllers;
use app\models\Team;
use yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;

class TeamController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Team;

        if($model->load(Yii::$app->request->post()) && $model->save()
        ){
            return $this->redirect(['/team/index']);
        }
        return $this->render('create',['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Team::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('team','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/team/index']);
    }

    public function actionIndex()
    {
        $team = Team::find()->orderBy('player_id')->all();
        return $this->render('index',['team'=>$team]);
    }

    public function actionUpdate($id)
    {
        $model = Team::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/team/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Team::findOne($id);

        return $this->render('view',compact('model'));
    }

}
