<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NhaphangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhaphang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mahdn') ?>

    <?= $form->field($model, 'macongty') ?>

    <?= $form->field($model, 'manhanvien') ?>

    <?= $form->field($model, 'mahang') ?>

    <?= $form->field($model, 'soluong') ?>

    <?php // echo $form->field($model, 'gianhap') ?>

    <?php // echo $form->field($model, 'donvitinh') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
