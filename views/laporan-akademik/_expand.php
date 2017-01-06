<?php
use yii\helpers\Html;
use kartik\tabs\TabsX;
use yii\helpers\Url;
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('LaporanAkademik'),
        'content' => $this->render('_detail', [
            'model' => $model,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Nilai'),
        'content' => $this->render('_dataNilai', [
            'model' => $model,
            'row' => $model->nilais,
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
