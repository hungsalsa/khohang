<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Mathang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mathang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenhang',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'maloaihang',['options' =>  ['class' => 'col-md-4']])->dropdownlist($dataParentLH,['prompt'=>' -- Chọn loại hàng --']) ?>
    <div class="col-md-2" style="padding-top: 30px;">
        <label></label>
        <?= Html::a("<i class=\"fa fa-plus-circle\"></i> ".Yii::t('app','Thêm mới'), ['/loaihang/create'], ['target'=>'_blank'], ['class'=>'pull-right', 'style' => 'padding-right:10px;']) ?>
    </div>

    <?= $form->field($model, 'id_thuonghieu',['options' =>  ['class' => 'col-md-3']])->dropdownlist($allthuonghieu,['prompt'=>' -- Chọn thương hiệu --']) ?>
    <div class="col-md-2" style="padding-top: 30px;">
        <label></label>
        <?= Html::a("<i class=\"fa fa-plus-circle\"></i> ".Yii::t('app','Thêm mới'), ['/hangxe/create'], ['target'=>'_blank'], ['class'=>'pull-right', 'style' => 'padding-right:10px;']) ?>
    </div>
    <?= $form->field($model, 'soluong',['options' =>  ['class' => 'col-md-3']])->textInput() ?>

    <?= $form->field($model, 'donvitinh',['options' =>  ['class' => 'col-md-3']])->dropdownlist($alldvt,['prompt'=>' -- Đơn vị tính --']) ?>

    <?= $form->field($model, 'macongty',['options' =>  ['class' => 'col-md-3']])->dropdownlist($allNCC,['prompt'=>' -- Chọn nhà cung cấp --']) ?>
    <div class="col-md-2" style="padding-top: 30px;">
        <label></label>
        <?= Html::a("<i class=\"fa fa-plus-circle\"></i> ".Yii::t('app','Thêm mới'), ['/nhacungcap/create'], ['target'=>'_blank'], ['class'=>'pull-right', 'style' => 'padding-right:10px;']) ?>
    </div>

    <?= $form->field($model, 'giahang',['options' =>  ['class' => 'col-md-3']])->textInput() ?>


    <?= $form->field($model, 'status',['options' =>  ['class' => 'col-md-3']])->dropdownlist([1=>'Hiện',0=>'Ẩn']) ?>

    <div class="clearfix"></div>
    <?= $form->field($model, 'mota')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('  Hủy  ' , ['index'], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
