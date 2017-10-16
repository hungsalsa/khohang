<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nhacungcap */

$this->title = $model->macongty;
$this->params['breadcrumbs'][] = ['label' => 'Nhacungcaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhacungcap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->macongty], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->macongty], [
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
            'macongty',
            'tencogty',
            'tenviethoadon',
            'diachi',
            'dienthoai',
            'fax',
            'email:email',
            'manhanvien',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
