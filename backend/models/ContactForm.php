<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact_form".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $created_at
 */
class ContactForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            //[['subject','name'],'integer','message'=>'This must be a number'],
            [['created_at'], 'safe'],
            [['email'],'email'],
            [['name', 'email'], 'string', 'max' => 100],
            //[['subject'], 'string', 'min' => 10],
            [['subject'], 'url','defaultScheme'=>'https'],
            [['email'],'unique','message'=>'Email is already taken by another user'],
            [['name'],'compare','compareAttribute'=>'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'created_at' => 'Created At',
        ];
    }
}
