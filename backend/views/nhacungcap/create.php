<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Nhacungcap */

$this->title = 'Create Nhacungcap';
$this->params['breadcrumbs'][] = ['label' => 'Nhacungcaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhacungcap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
