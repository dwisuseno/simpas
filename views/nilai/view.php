<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = $model->nilai;
$this->params['breadcrumbs'][] = ['label' => 'Nilai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Nilai'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
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
            'attribute' => 'laporan.id_grantee',
            'label' => 'Id Laporan',
        ],
        [
            'attribute' => 'mataPelajaran.mata_pelajaran',
            'label' => 'Id Mata Pelajaran',
        ],
        'nilai',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
