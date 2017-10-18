<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "loaihang".
 *
 * @property integer $id_LH
 * @property string $name
 * @property string $anh
 * @property integer $parentID
 * @property integer $hangxeID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Loaihang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaihang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_at', 'updated_at'], 'required'],
            [['parentID', 'hangxeID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'anh'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_LH' => 'Id  Lh',
            'name' => 'Tên loại hàng',
            'anh' => 'Ảnh',
            'parentID' => 'Thuộc loại hàng',
            'hangxeID' => 'Thương hiệu',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public $data;
    public function getLoaiHangParent($parent=0,$level = '')
    {
        $result = Loaihang::find()->asArray()->where('parentID =:parent',['parent'=>$parent])->orderBy('name')->all();
        $level .= " --| ";
        foreach ($result as $key => $value) {
            if ($parent==0) {
                 $level = "";
            }
            $this->data[$value['id_LH']] = $level.$value['name'];
            self::getLoaiHangParent($value['id_LH'],$level);
        }

        return $this->data;
    }

    public function get_LoaiHangByID($id_LH)
    {
        return ArrayHelper::map(Loaihang::find()->where('id_LH =:ID',['ID'=>$id_LH])->orderBy('name')->all(),'id_LH','name');
    }
}
