<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_donvitinh".
 *
 * @property integer $id
 * @property string $tendvt
 * @property integer $status
 */
class Donvitinh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_donvitinh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tendvt'], 'required'],
            [['status'], 'integer'],
            [['tendvt'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tendvt' => 'Tendvt',
            'status' => 'Status',
        ];
    }

    public function get_AllDonvitinh()
    {
         return ArrayHelper::map(Donvitinh::find()->where(['status'=>'1'])->all(),'id','tendvt');
    }
}
