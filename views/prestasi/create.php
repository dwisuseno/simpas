<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prestasi */

$this->title = 'Create Prestasi';
$this->params['breadcrumbs'][] = ['label' => 'Prestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</section>
