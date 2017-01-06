<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = 'Update Nilai: ' . ' ' . $model->nilai;
$this->params['breadcrumbs'][] = ['label' => 'Nilai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nilai, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
