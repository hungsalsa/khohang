<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Chitietdathang */

$this->title = 'Update Chitietdathang: ' . $model->sohoadon;
$this->params['breadcrumbs'][] = ['label' => 'Chitietdathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sohoadon, 'url' => ['view', 'id' => $model->sohoadon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chitietdathang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
