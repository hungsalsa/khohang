<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mathang".
 *
 * @property integer $mahang
 * @property string $tenhang
 * @property integer $macongty
 * @property integer $maloaihang
 * @property integer $soluong
 * @property integer $giahang
 * @property string $donvitinh
 * @property integer $manhanvien
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Mathang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mathang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenhang', 'macongty', 'maloaihang', 'donvitinh', 'manhanvien', 'created_at', 'updated_at'], 'required'],
            [['macongty', 'maloaihang', 'soluong', 'giahang', 'manhanvien', 'status', 'created_at', 'updated_at'], 'integer'],
            [['tenhang','mota'], 'string', 'max' => 255],
            [['donvitinh'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mahang' => 'Mahang',
            'tenhang' => 'Tên mặt hàng',
            'macongty' => 'Nhà cung cấp',
            'maloaihang' => 'Loại hàng',
            'soluong' => 'Số lượng',
            'mota' => 'Mô tả',
            'giahang' => 'Giá hàng',
            'donvitinh' => 'Đơn vị tính',
            'manhanvien' => 'Manhanvien',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
