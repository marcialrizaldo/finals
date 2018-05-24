<?php

namespace app\controllers;
use app\models\Player;
use yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;

class PlayerController extends \yii\web\Controller
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
        $model = new Player;

        if($model->load(Yii::$app->request->post()) && $model->save()
        ){
            return $this->redirect(['/player/index']);
        }
        return $this->render('create',['model' => $model]);
    }

    public function actionDelete($id)
    {
        Player::findOne($id)->delete();
        return $this->redirect(['/player/index']);
    }

    public function actionIndex()
    {
        $players = Player::find()->orderBy('fullname')->all();
        return $this->render('index',['players'=>$players]);
    }

    public function actionUpdate($id)
    {
        $model = Player::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/player/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Player::findOne($id);

        return $this->render('view',compact('model'));
    }

}
