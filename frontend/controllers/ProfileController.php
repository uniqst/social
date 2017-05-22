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
             $gallery = $model->userProfile->gallery;
            if ($avatar->load(Yii::$app->request->post())) {
            $avatar->file = UploadedFile::getInstance($avatar, 'file');
            if(!empty($avatar->file)){
            $gallery = new Gallery();
            $gallery->user_profile_id = Yii::$app->user->id;
            $gallery->photo = $avatar->avatar;
            $gallery->save();
            $uid = md5(uniqid(rand(), true));
            $avatar->file->saveAs('upload/' . $uid . '.' . $avatar->file->extension);
            $avatar->avatar = 'upload/' . $uid . '.' . $avatar->file->extension;
            }
            $avatar->save();
        }
             return $this->render('index', compact('model', 'avatar'));
    }

    public function actionNews(){
             $model = News::find()->with('userProfile')->all();
             // echo "<pre>";
             // print_r($model);
             // echo "</pre>";
             return $this->render('news', compact('model'));
    }

      public function actionGallery(){
        $this->layout = false;
        $model = UserProfile::find()->where(['user_id' => Yii::$app->user->id])->with('gallery')->one();
        return $this->render('gallery', compact('model'));
    }
      public function actionVideo(){
        $model = UserProfile::find()->where(['user_id' => Yii::$app->user->id])->with('video')->one();
        return $this->render('video', compact('model'));
    }
     public function actionGames(){
        return $this->render('games');
    }


}
