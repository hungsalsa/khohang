<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "chitietdathang".
 *
 * @property integer $sohoadon
 * @property integer $mahang
 * @property integer $giaban
 * @property integer $soluong
 * @property double $mucgiamgia
 * @property integer $created_at
 * @property integer $updated_at
 */
class Chitietdathang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitietdathang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mahang', 'created_at', 'updated_at'], 'required'],
            [['mahang', 'giaban', 'soluong', 'created_at', 'updated_at'], 'integer'],
            [['mucgiamgia'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sohoadon' => 'Sohoadon',
            'mahang' => 'Mahang',
            'giaban' => 'Giaban',
            'soluong' => 'Soluong',
            'mucgiamgia' => 'Mucgiamgia',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
