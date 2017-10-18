<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Loaihang;

/* @var $this yii\web\View */
/* @var $model backend\models\Mathang */

$this->title = $model->tenhang;
$this->params['breadcrumbs'][] = ['label' => 'Mathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mathang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->mahang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Danh sách' , ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('  Xóa  ', ['delete', 'id' => $model->mahang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có muốn xóa mặt hàng này ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php 
$loaihang = new Loaihang();
$dataParentLH = $loaihang->get_LoaiHangByID($model->maloaihang);
 ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mahang',
            'tenhang',
            'macongty',
            // 'maloaihang',
            [
                'label'=>'Loại hàng',
                'attribute' => 'maloaihang',
                'value' => $dataParentLH[$model->maloaihang],
            ],
            'soluong',
            'mota',
            // 'giahang',
            [
                'label' => 'Giá hàng',
                'attribute' => 'giahang',
                'value' => number_format($model->giahang, 1,',','.'),
            ],
            'donvitinh',
            'manhanvien',
            // 'status',
            [
                'label' => 'Trạng thái',
                'attribute' => 'status',
                'value' => $model->status==1? 'Hiện' : 'Ẩn',
            ],
            [
                'label' => 'Ngày tạo',
                'attribute' => 'created_at',
                'format' => ['date', 'php:d-m-Y']
            ],
            [
                'label' => 'Ngày cập nhật',
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d-m-Y']
            ],
        ],
    ]) ?>

</div>
