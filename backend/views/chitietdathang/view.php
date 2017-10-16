<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Chitietdathang */

$this->title = $model->sohoadon;
$this->params['breadcrumbs'][] = ['label' => 'Chitietdathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietdathang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sohoadon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sohoadon], [
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
            'sohoadon',
            'mahang',
            'giaban',
            'soluong',
            'mucgiamgia',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
