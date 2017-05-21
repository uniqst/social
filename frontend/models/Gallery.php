<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property integer $user_profile_id
 * @property string $photo
 *
 * @property UserProfile $userProfile
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_profile_id', 'photo'], 'required'],
            [['user_profile_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['user_profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserProfile::className(), 'targetAttribute' => ['user_profile_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_profile_id' => 'User Profile ID',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfile()
    {
        return $this->hasOne(UserProfile::className(), ['id' => 'user_profile_id']);
    }
}
