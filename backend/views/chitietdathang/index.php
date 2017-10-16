<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChitietdathangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chitietdathangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietdathang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chitietdathang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sohoadon',
            'mahang',
            'giaban',
            'soluong',
            'mucgiamgia',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
