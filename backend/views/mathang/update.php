<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mathang */

$this->title = 'Update Mathang: ' . $model->mahang;
$this->params['breadcrumbs'][] = ['label' => 'Mathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mahang, 'url' => ['view', 'id' => $model->mahang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mathang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allNCC' => $allNCC,
        'alldvt' => $alldvt,
        'dataParentLH' => $dataParentLH,
        'allthuonghieu' => $allthuonghieu,
    ]) ?>

</div>
