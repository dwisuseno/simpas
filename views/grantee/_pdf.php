<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Grantee */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Grantee', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grantee-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Grantee'.' '. Html::encode($this->title) ?></h2>
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
        'nama_lengkap',
        'tgl_lahir',
        'alamat',
        'nama_sekolah',
        'alamat_sekolah',
        'telp_sekolah',
        'asal_sekolah',
        'intake',
        'nama_bank',
        'nomor_rekening',
        'atas_nama_rekening',
        'status',
        'jenis_beasiswa',
        'jurusan',
        'path_foto',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerLaporanAkademik->totalCount){
    $gridColumnLaporanAkademik = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
                'deskripsi:ntext',
        'semester',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerLaporanAkademik,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Laporan Akademik'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnLaporanAkademik
    ]);
}
?>
    </div>
    
    <div class="row">
<?php
if($providerPrestasi->totalCount){
    $gridColumnPrestasi = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
                'nama',
        'deskripsi:ntext',
        'tanggal',
        'tingkat',
        'semester',
        'path_photo',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPrestasi,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Prestasi'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnPrestasi
    ]);
}
?>
    </div>
</div>
