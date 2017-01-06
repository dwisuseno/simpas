<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grantee */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'LaporanAkademik', 
        'relID' => 'laporan-akademik', 
        'value' => \yii\helpers\Json::encode($model->laporanAkademiks),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Prestasi', 
        'relID' => 'prestasi', 
        'value' => \yii\helpers\Json::encode($model->prestasis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="grantee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

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

    <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Sekolah']) ?>

    <?= $form->field($model, 'alamat_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Alamat Sekolah']) ?>

    <?= $form->field($model, 'telp_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Telp Sekolah']) ?>

    <?= $form->field($model, 'asal_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Asal Sekolah']) ?>

    <?= $form->field($model, 'intake')->textInput(['maxlength' => true, 'placeholder' => 'Intake']) ?>

    <?= $form->field($model, 'nama_bank')->textInput(['maxlength' => true, 'placeholder' => 'Nama Bank']) ?>

    <?= $form->field($model, 'nomor_rekening')->textInput(['placeholder' => 'Nomor Rekening']) ?>

    <?= $form->field($model, 'atas_nama_rekening')->textInput(['maxlength' => true, 'placeholder' => 'Atas Nama Rekening']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'grantees' => 'Grantees', 'alumni' => 'Alumni', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_beasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Jenis Beasiswa']) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true, 'placeholder' => 'Jurusan']) ?>

    <?= $form->field($model, 'path_foto')->textInput(['maxlength' => true, 'placeholder' => 'Path Foto']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('LaporanAkademik'),
            'content' => $this->render('_formLaporanAkademik', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->laporanAkademiks),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Prestasi'),
            'content' => $this->render('_formPrestasi', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->prestasis),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
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
