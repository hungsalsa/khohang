<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hangxe */

$this->title = 'Update Hangxe: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hangxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hangxe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
