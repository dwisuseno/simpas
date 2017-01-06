<?php
use yii\helpers\Html;
use kartik\tabs\TabsX;
use yii\helpers\Url;
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Donatur'),
        'content' => $this->render('_detail', [
            'model' => $model,
        ]),
    ],
        [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Grantee'),
        'content' => $this->render('_dataGrantee', [
            'model' => $model,
            'row' => $model->grantees,
        ]),
    ],
            [
        'label' => '<i class="glyphicon glyphicon-book"></i> '. Html::encode('Pemasukan'),
        'content' => $this->render('_dataPemasukan', [
            'model' => $model,
            'row' => $model->pemasukans,
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
