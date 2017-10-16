<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property integer $user_group
 * @property string $auth_key
 * @property string $password_hash
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property integer $gender
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'user_group', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['user_group', 'gender', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'address', 'phone', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'user_group' => 'User Group',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'gender' => 'Gender',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
