<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Donvitinh */

$this->title = 'Create Donvitinh';
$this->params['breadcrumbs'][] = ['label' => 'Donvitinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donvitinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
