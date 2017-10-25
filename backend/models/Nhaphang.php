<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nhaphang".
 *
 * @property integer $mahdn
 * @property integer $macongty
 * @property integer $manhanvien
 * @property string $mahang
 * @property integer $soluong
 * @property integer $gianhap
 * @property string $donvitinh
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Nhaphang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhaphang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['macongty', 'manhanvien', 'mahang', 'donvitinh', 'created_at', 'updated_at'], 'required'],
            [['macongty', 'manhanvien', 'soluong', 'status', 'created_at', 'updated_at'], 'integer'],
            [['mahang'], 'string', 'max' => 255],
            [['donvitinh'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mahdn' => 'Mahdn',
            'macongty' => 'Nhà cung cấp',
            'manhanvien' => 'Nhân viên',
            'mahang' => 'Mặt hàng',
            'soluong' => 'Số lượng',
            'gianhap' => 'Đơn giá nhập',
            'donvitinh' => 'Đơn vị tính',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
