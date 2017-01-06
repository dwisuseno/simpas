<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengeluaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pengeluaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'jumlah')->textInput(['placeholder' => 'Jumlah']) ?>

    <?= $form->field($model, 'no_pengiriman')->textInput(['maxlength' => true, 'placeholder' => 'No Pengiriman']) ?>

    <?= $form->field($model, 'bukti_pengeluaran')->textInput(['maxlength' => true, 'placeholder' => 'Bukti Pengeluaran']) ?>

    <?php /* echo $form->field($model, 'ket_pengeluaran')->textInput(['maxlength' => true, 'placeholder' => 'Ket Pengeluaran']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
