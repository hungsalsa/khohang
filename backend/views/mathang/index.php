<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MathangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mathangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mathang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mathang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mahang',
            'tenhang',
            'macongty',
            'maloaihang',
            'soluong',
            // 'mota',
            // 'giahang',
            // 'donvitinh',
            // 'manhanvien',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
