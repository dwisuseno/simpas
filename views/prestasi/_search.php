<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrestasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-prestasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_grantee')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Grantee::find()->orderBy('id')->asArray()->all(), 'id', 'nama_lengkap'),
        'options' => ['placeholder' => 'Choose Grantee'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggal',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?php /* echo $form->field($model, 'tingkat')->dropDownList([ 'sekolah' => 'Sekolah', 'kota' => 'Kota', 'kabupaten' => 'Kabupaten', 'provinsi' => 'Provinsi', 'nasional' => 'Nasional', 'internasional' => 'Internasional', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'semester')->dropDownList([ 'genap' => 'Genap', 'ganjil' => 'Ganjil', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'path_photo')->textInput(['maxlength' => true, 'placeholder' => 'Path Photo']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
