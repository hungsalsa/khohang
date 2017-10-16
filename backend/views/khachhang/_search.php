<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KhachhangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'makhachhang') ?>

    <?= $form->field($model, 'tenkhachhang') ?>

    <?= $form->field($model, 'dienthoai') ?>

    <?= $form->field($model, 'diachi') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'manhanvien') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
