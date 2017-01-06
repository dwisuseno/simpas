<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Grantee */

$this->title = 'Save As New Grantee: '. ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Grantee', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Save As New';
?>
<section class="content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</section>
