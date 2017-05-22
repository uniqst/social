<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property integer $profile_id
 * @property integer $from_id
 * @property string $content
 * @property string $date
 *
 * @property UserProfile $profile
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profile_id', 'from_id', 'content', 'date'], 'required'],
            [['profile_id', 'from_id'], 'integer'],
            [['date'], 'safe'],
            [['content'], 'string', 'max' => 1000],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserProfile::className(), 'targetAttribute' => ['profile_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profile_id' => 'Profile ID',
            'from_id' => 'From ID',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfile()
    {
        return $this->hasOne(UserProfile::className(), ['id' => 'profile_id']);
    }
      public function getUserProfileFrom()
    {
        return $this->hasOne(UserProfile::className(), ['id' => 'from_id']);
    }
}

