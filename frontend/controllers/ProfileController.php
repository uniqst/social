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
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
/**
 * Site controller
 */
class ProfileController extends AccessController
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
             $model = User::find()->where(['username' => Yii::$app->user->identity->username])->with('userProfile')->one();
             $avatar = $model->userProfile;
            if ($avatar->load(Yii::$app->request->post())) {
            $avatar->file = UploadedFile::getInstance($avatar, 'file');
            if(!empty($avatar->file)){
            $avatar->file->saveAs('upload/' . $avatar->file->baseName . '.' . $avatar->file->extension);
            $avatar->avatar = 'upload/' . $avatar->file->baseName . '.' . $avatar->file->extension;
            }
            $avatar->save();
        }
             return $this->render('index', compact('model', 'avatar'));
    }

    public function actionNews(){
             $model = News::find()->all();
             return $this->render('news', compact('model'));
    }

}
