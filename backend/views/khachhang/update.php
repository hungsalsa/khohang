<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Khachhang */

$this->title = 'Update Khachhang: ' . $model->makhachhang;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->makhachhang, 'url' => ['view', 'id' => $model->makhachhang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khachhang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
