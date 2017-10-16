<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MathangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mathang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mahang') ?>

    <?= $form->field($model, 'tenhang') ?>

    <?= $form->field($model, 'macongty') ?>

    <?= $form->field($model, 'maloaihang') ?>

    <?= $form->field($model, 'soluong') ?>

    <?php // echo $form->field($model, 'mota') ?>
    
    <?php // echo $form->field($model, 'giahang') ?>

    <?php // echo $form->field($model, 'donvitinh') ?>

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
