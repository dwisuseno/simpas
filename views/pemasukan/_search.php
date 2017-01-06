<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemasukanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pemasukan-search">

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

    <?= $form->field($model, 'jumlah')->textInput(['placeholder' => 'Jumlah']) ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'kakak_asuh' => 'Kakak asuh', 'rutin' => 'Rutin', 'insidental' => 'Insidental', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
