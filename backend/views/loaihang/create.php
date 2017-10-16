<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Loaihang */

$this->title = 'Thêm mới loại hàng';
$this->params['breadcrumbs'][] = ['label' => 'Loaihangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaihang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allHangXe' => $allHangXe,
        'dataParent' => $dataParent,
    ]) ?>

</div>
