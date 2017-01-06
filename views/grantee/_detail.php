<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Grantee */

?>
<div class="grantee-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
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
</div>