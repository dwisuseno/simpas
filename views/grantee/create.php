<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Grantee */

$this->title = 'Create Grantee';
$this->params['breadcrumbs'][] = ['label' => 'Grantee', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</section>
