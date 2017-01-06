<?php
use yii\helpers\Html;
use kartik\tabs\TabsX;
use yii\helpers\Url;
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Grantee'),
        'content' => $this->render('_detail', [
            'model' => $model,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Laporan Akademik'),
        'content' => $this->render('_dataLaporanAkademik', [
            'model' => $model,
            'row' => $model->laporanAkademiks,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Prestasi'),
        'content' => $this->render('_dataPrestasi', [
            'model' => $model,
            'row' => $model->prestasis,
        ]),
    ],
    ];
echo TabsX::widget([
    'items' => $items,
    'position' => TabsX::POS_ABOVE,
    'encodeLabels' => false,
    'class' => 'tes',
    'pluginOptions' => [
        'bordered' => true,
        'sideways' => true,
        'enableCache' => false
    ],
]);
?>
