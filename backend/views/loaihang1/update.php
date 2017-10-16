<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaihang */

$this->title = 'Update Loaihang: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Loaihangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_LH]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaihang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
