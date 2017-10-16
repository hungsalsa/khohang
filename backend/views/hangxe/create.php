<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Hangxe */

$this->title = 'Thêm mới hãng xe';
$this->params['breadcrumbs'][] = ['label' => 'Hangxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hangxe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
