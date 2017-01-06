<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->grantees,
        'key' => 'id'
    ]);
    $gridColumns = [
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
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'grantee'
        ],
    ];
    
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'containerOptions' => ['style' => 'overflow: auto'],
        'pjax' => true,
        'beforeHeader' => [
            [
                'options' => ['class' => 'skip-export']
            ]
        ],
        'export' => [
            'fontAwesome' => true
        ],
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'persistResize' => false,
    ]);
