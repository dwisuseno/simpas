<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pengeluaran'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'nama',
        'jumlah',
        'no_pengiriman',
        'bukti_pengeluaran',
        'ket_pengeluaran',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
