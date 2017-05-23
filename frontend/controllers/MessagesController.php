<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\News;
use frontend\models\User;
use frontend\models\Avatar;
use frontend\models\Gallery;
use frontend\models\UserProfile;
use frontend\models\Messages;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\web\UploadedFile;
/**
 * Site controller
 */
class MessagesController extends AccessController
{   
    public $layout = 'profile';


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex(){
          $model = Messages::find()->with('from')->joinWith(['profile' => function($query){
            $query->where(['user_id' => 1]);
          }])->groupBy('')->all();
          // echo "<pre>";
          // print_r($model);
          // echo "</pre>";
          return $this->render('index', compact('model'));
    }

    public function actionMessage($from){
          $model = UserProfile::find()->where(['user_id' => $from])->with('from.from')->one();
          // echo "<pre>";
          // print_r($model);
          // echo "</pre>";
          return $this->render('message', compact('model'));
    }

}
