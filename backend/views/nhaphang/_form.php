<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nhaphang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhaphang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'macongty',['options' =>  ['class' => 'col-md-3']])->dropdownlist($allNCC,['prompt'=>' -- Chọn nhà cung cấp --']) ?>
    <div class="col-md-2" style="padding-top: 30px;">
        <label></label>
        <?= Html::a("<i class=\"fa fa-plus-circle\"></i> ".Yii::t('app','Thêm mới'), ['/nhacungcap/create'], ['target'=>'_blank'], ['class'=>'pull-right', 'style' => 'padding-right:10px;']) ?>
    </div>

    <?= $form->field($model, 'mahang',['options' =>  ['class' => 'col-md-3']])->dropdownlist($allMathang,['prompt'=>' -- Chọn mặt hàng --']) ?>
    <div class="col-md-2" style="padding-top: 30px;">
        <label></label>
        <?= Html::a("<i class=\"fa fa-plus-circle\"></i> ".Yii::t('app','Thêm mới'), ['/mathang/create'], ['target'=>'_blank'], ['class'=>'pull-right', 'style' => 'padding-right:10px;']) ?>
    </div>

    <div class="clearfix"></div>

    <?= $form->field($model, 'soluong',['options' =>  ['class' => 'col-md-3']])->textInput() ?>

    <?= $form->field($model, 'gianhap',['options' =>  ['class' => 'col-md-3']])->textInput(['class' => 'giahang form-control']) ?>

    <?= $form->field($model, 'donvitinh',['options' =>  ['class' => 'col-md-3']])->dropdownlist($alldvt,['prompt'=>' -- Đơn vị tính --']) ?>

    <?= $form->field($model, 'status',['options' =>  ['class' => 'col-md-3']])->dropdownlist([1=>'Hiện',0=>'Ẩn']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
