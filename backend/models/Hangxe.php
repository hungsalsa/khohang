<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "hangxe". Thay bang bang thuonghieu
 *
 * @property integer $id
 * @property string $tenhang
 * @property string $anh
 * @property string $mota
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Hangxe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hangxe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenhang', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['tenhang', 'anh', 'mota'], 'string', 'max' => 255],
            [['tenhang'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenhang' => 'Tên hãng xe',
            'anh' => 'Ảnh',
            'mota' => 'Mô tả',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function get_all_Hangxe()
    {
        $hangxe = Hangxe::find()
        ->where(['status' => '1'])
        ->orderBy('tenhang')
        ->all();
        return ArrayHelper::map($hangxe,'id','tenhang');
    }
}
