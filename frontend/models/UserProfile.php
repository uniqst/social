<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $avatar
 * @property string $name
 * @property string $surname
 * @property string $status
 * @property string $born
 * @property string $city
 * @property string $marital_status
 *
 * @property Gallery[] $galleries
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }
    public $file;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'avatar', 'name', 'surname', 'status', 'born', 'city', 'marital_status'], 'required'],
            [['user_id'], 'integer'],
            [['born'], 'safe'],
            [['file'], 'file', 'skipOnEmpty' => true], 
            [['avatar', 'name', 'surname', 'status', 'city', 'marital_status'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'avatar' => 'Avatar',
            'name' => 'Name',
            'surname' => 'Surname',
            'status' => 'Status',
            'born' => 'Born',
            'city' => 'City',
            'marital_status' => 'Marital Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGallery()
    {
        return $this->hasMany(Gallery::className(), ['user_profile_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
