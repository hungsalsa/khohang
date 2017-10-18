<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Donvitinh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donvitinh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tendvt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropdownlist([1=>'Hiện',0=>'Ẩn']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
