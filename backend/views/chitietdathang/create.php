<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Chitietdathang */

$this->title = 'Create Chitietdathang';
$this->params['breadcrumbs'][] = ['label' => 'Chitietdathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietdathang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
