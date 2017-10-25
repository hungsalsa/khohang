<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nhaphang */

$this->title = 'Update Nhaphang: ' . $model->mahdn;
$this->params['breadcrumbs'][] = ['label' => 'Nhaphangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mahdn, 'url' => ['view', 'id' => $model->mahdn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nhaphang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
