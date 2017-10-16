<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaihang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loaihang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anh')->textInput(['maxlength' => true]) ?>

   
    <?= $form->field($model, 'parentID')->dropDownlist($dataParent,['prompt'=>'-- Chọn nhóm loại hàng --','promptOptions' => ['value' => '0']]) ?>

    <?= $form->field($model, 'hangxeID')->dropdownlist($allHangXe,['prompt'=>' -- Chọn thương hiệu --']) ?>

    <?= $form->field($model, 'status')->dropdownlist([1=>'Hiện',0=>'Ẩn']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
