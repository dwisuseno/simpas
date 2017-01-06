<div class="form-group" id="add-prestasi">
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
    'formName' => 'Prestasi',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'nama' => ['type' => TabularForm::INPUT_TEXT],
        'deskripsi' => ['type' => TabularForm::INPUT_TEXTAREA],
        'tanggal' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggal',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'tingkat' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'sekolah' => 'Sekolah', 'kota' => 'Kota', 'kabupaten' => 'Kabupaten', 'provinsi' => 'Provinsi', 'nasional' => 'Nasional', 'internasional' => 'Internasional', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Tingkat'],
                    ]
        ],
        'semester' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'genap' => 'Genap', 'ganjil' => 'Ganjil', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Semester'],
                    ]
        ],
        'path_photo' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPrestasi(' . $key . '); return false;', 'id' => 'prestasi-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Prestasi', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPrestasi()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

