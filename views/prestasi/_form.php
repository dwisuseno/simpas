<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prestasi */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="prestasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

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

    <?= $form->field($model, 'tingkat')->dropDownList([ 'sekolah' => 'Sekolah', 'kota' => 'Kota', 'kabupaten' => 'Kabupaten', 'provinsi' => 'Provinsi', 'nasional' => 'Nasional', 'internasional' => 'Internasional', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'semester')->dropDownList([ 'genap' => 'Genap', 'ganjil' => 'Ganjil', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'path_photo')->textInput(['maxlength' => true, 'placeholder' => 'Path Photo']) ?>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton('Save As New', ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>