<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nhacungcap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhacungcap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tencogty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tenviethoadon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dienthoai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropdownlist([1=>'Hiện',0=>'Ẩn']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
