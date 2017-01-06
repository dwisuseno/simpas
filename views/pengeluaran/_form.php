<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="pengeluaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

    <?= $form->field($model, 'jumlah')->textInput(['placeholder' => 'Jumlah']) ?>

    <?= $form->field($model, 'no_pengiriman')->textInput(['maxlength' => true, 'placeholder' => 'No Pengiriman']) ?>

    <?= $form->field($model, 'bukti_pengeluaran')->textInput(['maxlength' => true, 'placeholder' => 'Bukti Pengeluaran']) ?>

    <?= $form->field($model, 'ket_pengeluaran')->textInput(['maxlength' => true, 'placeholder' => 'Ket Pengeluaran']) ?>

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
