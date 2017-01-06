<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MataPelajaran */

$this->title = 'Save As New Mata Pelajaran: '. ' ' . $model->mata_pelajaran;
$this->params['breadcrumbs'][] = ['label' => 'Mata Pelajaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mata_pelajaran, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Save As New';
?>
<section class="content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</section>
