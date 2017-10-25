<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NhaphangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhaphangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhaphang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nhaphang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mahdn',
            'macongty',
            'manhanvien',
            'mahang',
            'soluong',
            // 'gianhap',
            // 'donvitinh',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
