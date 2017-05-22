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
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\web\UploadedFile;
/**
 * Site controller
 */
class VideoController extends AccessController
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

      public function actionIndex()
   {
        $model = UserProfile::find()->where(['user_id' => Yii::$app->user->id])->with('video')->one();
        return $this->render('index', compact('model'));
    }

}
