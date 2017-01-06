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
<section class="content">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= 'Donatur'.' '. Html::encode($this->title) ?></h2>
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
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-grantee']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Grantee'),
                ],
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
                'pjax' => true,
                'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pemasukan']],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                    'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Pemasukan'),
                ],
                'columns' => $gridColumnPemasukan
            ]);
        }
        ?>
    </div>
</section>
