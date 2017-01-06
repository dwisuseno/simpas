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
<section class="content">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= 'Grantee'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . 'PDF', 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => 'Will open the generated PDF file in a new window'
                ]
            )?>
            <?= Html::a('Save As New', ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'donatur.nama',
            'label' => 'Id Donatur',
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
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-laporan-akademik']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Laporan Akademik'),
        ],
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
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-prestasi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Prestasi'),
        ],
        'columns' => $gridColumnPrestasi
    ]);
}
?>
    </div>
</section>
