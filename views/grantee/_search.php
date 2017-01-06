<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GranteeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-grantee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_donatur')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Donatur::find()->orderBy('id')->asArray()->all(), 'id', 'nama'),
        'options' => ['placeholder' => 'Choose Donatur'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true, 'placeholder' => 'Nama Lengkap']) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Lahir',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Alamat']) ?>

    <?php /* echo $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Sekolah']) */ ?>

    <?php /* echo $form->field($model, 'alamat_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Alamat Sekolah']) */ ?>

    <?php /* echo $form->field($model, 'telp_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Telp Sekolah']) */ ?>

    <?php /* echo $form->field($model, 'asal_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Asal Sekolah']) */ ?>

    <?php /* echo $form->field($model, 'intake')->textInput(['maxlength' => true, 'placeholder' => 'Intake']) */ ?>

    <?php /* echo $form->field($model, 'nama_bank')->textInput(['maxlength' => true, 'placeholder' => 'Nama Bank']) */ ?>

    <?php /* echo $form->field($model, 'nomor_rekening')->textInput(['placeholder' => 'Nomor Rekening']) */ ?>

    <?php /* echo $form->field($model, 'atas_nama_rekening')->textInput(['maxlength' => true, 'placeholder' => 'Atas Nama Rekening']) */ ?>

    <?php /* echo $form->field($model, 'status')->dropDownList([ 'grantees' => 'Grantees', 'alumni' => 'Alumni', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'jenis_beasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Jenis Beasiswa']) */ ?>

    <?php /* echo $form->field($model, 'jurusan')->textInput(['maxlength' => true, 'placeholder' => 'Jurusan']) */ ?>

    <?php /* echo $form->field($model, 'path_foto')->textInput(['maxlength' => true, 'placeholder' => 'Path Foto']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
