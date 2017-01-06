<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pemasukan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pemasukan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasukan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pemasukan'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'donatur.nama',
                'label' => 'Id Donatur'
            ],
        'jumlah',
        'jenis',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
