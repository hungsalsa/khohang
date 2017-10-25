<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nhaphang */

$this->title = $model->mahdn;
$this->params['breadcrumbs'][] = ['label' => 'Nhaphangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhaphang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mahdn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mahdn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mahdn',
            'macongty',
            'manhanvien',
            'mahang',
            'soluong',
            'gianhap',
            'donvitinh',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
