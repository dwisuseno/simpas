<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\LaporanAkademik */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Akademik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-akademik-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Laporan Akademik'.' '. Html::encode($this->title) ?></h2>
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
        'deskripsi:ntext',
        'semester',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerNilai->totalCount){
    $gridColumnNilai = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
                [
                'attribute' => 'mataPelajaran.mata_pelajaran',
                'label' => 'Id Mata Pelajaran'
            ],
        'nilai',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerNilai,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Nilai'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnNilai
    ]);
}
?>
    </div>
</div>
