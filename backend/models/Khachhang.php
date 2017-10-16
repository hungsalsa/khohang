<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $makhachhang
 * @property string $tenkhachhang
 * @property string $dienthoai
 * @property string $diachi
 * @property string $email
 * @property integer $manhanvien
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenkhachhang', 'manhanvien', 'created_at', 'updated_at'], 'required'],
            [['manhanvien', 'status', 'created_at', 'updated_at'], 'integer'],
            [['tenkhachhang'], 'string', 'max' => 255],
            [['dienthoai', 'diachi', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'makhachhang' => 'Makhachhang',
            'tenkhachhang' => 'Tenkhachhang',
            'dienthoai' => 'Dienthoai',
            'diachi' => 'Diachi',
            'email' => 'Email',
            'manhanvien' => 'Manhanvien',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
