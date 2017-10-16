<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Mathang */

$this->title = 'Create Mathang';
$this->params['breadcrumbs'][] = ['label' => 'Mathangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mathang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allNCC' => $allNCC,
        'alldvt' => $alldvt,
        'dataParentLH' => $dataParentLH,
    ]) ?>

</div>
