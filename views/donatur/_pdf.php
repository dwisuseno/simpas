<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Donatur */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Donatur', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donatur-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Donatur'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'nama',
        'nomor_ktp',
        'alamat',
        'telp',
        'email:email',
        'pekerjaan',
        'kakak_asuh',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerGrantee->totalCount){
    $gridColumnGrantee = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
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
    echo Gridview::widget([
        'dataProvider' => $providerGrantee,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Grantee'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnGrantee
    ]);
}
?>
    </div>
    
    <div class="row">
<?php
if($providerPemasukan->totalCount){
    $gridColumnPemasukan = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
                'jumlah',
        'jenis',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPemasukan,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Pemasukan'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnPemasukan
    ]);
}
?>
    </div>
</div>
