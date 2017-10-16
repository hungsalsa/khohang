<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Chitietdathang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietdathang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mahang')->textInput() ?>

    <?= $form->field($model, 'giaban')->textInput() ?>

    <?= $form->field($model, 'soluong')->textInput() ?>

    <?= $form->field($model, 'mucgiamgia')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
