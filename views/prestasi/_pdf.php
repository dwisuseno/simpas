<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Prestasi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestasi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Prestasi'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'grantee.nama_lengkap',
                'label' => 'Id Grantee'
            ],
        'nama',
        'deskripsi:ntext',
        'tanggal',
        'tingkat',
        'semester',
        'path_photo',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
