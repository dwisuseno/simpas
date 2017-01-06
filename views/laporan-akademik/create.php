<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LaporanAkademik */

$this->title = 'Create Laporan Akademik';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Akademik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</section>
