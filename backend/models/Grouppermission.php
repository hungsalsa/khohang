<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "grouppermission".
 *
 * @property integer $id
 * @property integer $permissionID
 * @property integer $groupID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Grouppermission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grouppermission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permissionID', 'groupID', 'created_at', 'updated_at'], 'required'],
            [['permissionID', 'groupID', 'status', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'permissionID' => 'Permission ID',
            'groupID' => 'Group ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
