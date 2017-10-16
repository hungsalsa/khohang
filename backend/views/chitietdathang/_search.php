<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ChitietdathangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietdathang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sohoadon') ?>

    <?= $form->field($model, 'mahang') ?>

    <?= $form->field($model, 'giaban') ?>

    <?= $form->field($model, 'soluong') ?>

    <?= $form->field($model, 'mucgiamgia') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
