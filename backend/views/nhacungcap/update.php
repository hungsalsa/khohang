<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nhacungcap */

$this->title = 'Update Nhacungcap: ' . $model->macongty;
$this->params['breadcrumbs'][] = ['label' => 'Nhacungcaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->macongty, 'url' => ['view', 'id' => $model->macongty]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nhacungcap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
