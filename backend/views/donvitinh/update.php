<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Donvitinh */

$this->title = 'Update Donvitinh: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Donvitinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="donvitinh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
