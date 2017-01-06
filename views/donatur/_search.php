<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DonaturSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-donatur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'nomor_ktp')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Ktp']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Alamat']) ?>

    <?= $form->field($model, 'telp')->textInput(['maxlength' => true, 'placeholder' => 'Telp']) ?>

    <?php /* echo $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email']) */ ?>

    <?php /* echo $form->field($model, 'pekerjaan')->textInput(['maxlength' => true, 'placeholder' => 'Pekerjaan']) */ ?>

    <?php /* echo $form->field($model, 'kakak_asuh')->dropDownList([ 'ya' => 'Ya', 'tidak' => 'Tidak', ], ['prompt' => '']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
