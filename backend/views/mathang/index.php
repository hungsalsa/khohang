<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Loaihang;
// use yii\helpers\Url;

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

            // 'mahang',
            'tenhang',
            'id_thuonghieu',
            // 'macongty',
            'maloaihang',
            [
                'label'=>'Loại hàng',
                'attribute' => 'maloaihang',
                'value' =>  function ($data) {
                    $loaihang = new Loaihang();
                     $rrr = $loaihang->get_LoaiHangByID($data->maloaihang);
                    return ($rrr[$data->maloaihang]);
                    },
            ],
            'soluong',
            // 'mota',
            // 'giahang',
            [
                'label' => 'Giá hàng',
                'attribute' => 'giahang',
                'value' =>  function ($data) {
                    return number_format($data->giahang, 1,',','.');
                }
            ],
            // 'donvitinh',
            // 'manhanvien',
            'status',
            // 'created_at',
            // 'updated_at',
            // ['attribute' => 'status',
            //  'label' =>'status',
            //  'contentOptions' => ['style' => 'width:680px;  min-width:600px;'],
            //   ],

            // [
            //     'class' => 'yii\grid\ActionColumn',
            //     'header' => 'Hành động',
            //     'headerOptions' => [
            //          'style' => 'color:red'
            //      ],
            //     'contentOptions' =>['style' => 'width:10%;'],
            // ],

            [
              'class' => 'yii\grid\ActionColumn',
              'header' => 'Hành động',
              'contentOptions' =>['style' => 'width:10%;'],
              'headerOptions' => ['style' => 'width:8%;color:#337ab7'],
              'template' => '{view}{update}{delete}',
              'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['class'=>'btnaction',
                        'title' => Yii::t('app', 'Chi tiết sản phẩm'),
                               
                    ]);
                },

                'update' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['class'=>'btnaction',
                        'title' => Yii::t('app', 'Sửa sản phẩm'),
                    ]);
                },
                // 'delete' => function ($url, $model) {
                //     return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, ['class'=>'btnaction','title' => Yii::t('app', 'Xóa sản phẩm'),
                //     ]);
                // }

                'delete' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-trash"></i>', 
                            ['delete', 'id' => $model->mahang], 
                            ['data' => ['confirm' => 'Do you really want to delete this element?','method' => 'post'],'class'=>'btnaction',
                        'title' => Yii::t('app', 'Xóa sản phẩm')]
                        );
                },
                

              ],

            ],
        ],
    ]); ?>
</div>
