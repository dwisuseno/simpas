<div class="form-group" id="add-laporan-akademik">
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
    'formName' => 'LaporanAkademik',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'deskripsi' => ['type' => TabularForm::INPUT_TEXTAREA],
        'semester' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'genap' => 'Genap', 'ganjil' => 'Ganjil', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Semester'],
                    ]
        ],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowLaporanAkademik(' . $key . '); return false;', 'id' => 'laporan-akademik-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Laporan Akademik', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowLaporanAkademik()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

