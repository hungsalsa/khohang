<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mathang */

$this->title = $model->mahang;
$this->params['breadcrumbs'][] = ['label' => 'Mathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mathang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mahang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mahang], [
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
            'mahang',
            'tenhang',
            'macongty',
            'maloaihang',
            'soluong',
            'mota',
            'giahang',
            'donvitinh',
            'manhanvien',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
