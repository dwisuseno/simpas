<div class="form-group" id="add-grantee">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Grantee',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'nama_lengkap' => ['type' => TabularForm::INPUT_TEXT],
        'tgl_lahir' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Lahir',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'alamat' => ['type' => TabularForm::INPUT_TEXT],
        'nama_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'alamat_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'telp_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'asal_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'intake' => ['type' => TabularForm::INPUT_TEXT],
        'nama_bank' => ['type' => TabularForm::INPUT_TEXT],
        'nomor_rekening' => ['type' => TabularForm::INPUT_TEXT],
        'atas_nama_rekening' => ['type' => TabularForm::INPUT_TEXT],
        'status' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'grantees' => 'Grantees', 'alumni' => 'Alumni', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Status'],
                    ]
        ],
        'jenis_beasiswa' => ['type' => TabularForm::INPUT_TEXT],
        'jurusan' => ['type' => TabularForm::INPUT_TEXT],
        'path_foto' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowGrantee(' . $key . '); return false;', 'id' => 'grantee-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Grantee', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowGrantee()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

