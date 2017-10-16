<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "nhacungcap".
 *
 * @property integer $macongty
 * @property string $tencogty
 * @property string $tenviethoadon
 * @property string $diachi
 * @property string $dienthoai
 * @property string $fax
 * @property string $email
 * @property integer $manhanvien
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Nhacungcap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhacungcap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tencogty', 'diachi', 'manhanvien', 'created_at', 'updated_at'], 'required'],
            [['manhanvien', 'status', 'created_at', 'updated_at'], 'integer'],
            [['tencogty', 'tenviethoadon', 'diachi', 'dienthoai', 'fax', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'macongty' => 'Macongty',
            'tencogty' => 'Tencogty',
            'tenviethoadon' => 'Tenviethoadon',
            'diachi' => 'Diachi',
            'dienthoai' => 'Dienthoai',
            'fax' => 'Fax',
            'email' => 'Email',
            'manhanvien' => 'Manhanvien',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function get_AllNhacungcap()
    {
         return ArrayHelper::map(Nhacungcap::find()->where(['status'=>'1'])->all(),'macongty','tencogty');
    }
}
