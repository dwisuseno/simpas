<div class="form-group" id="add-pemasukan">
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
    'formName' => 'Pemasukan',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'jumlah' => ['type' => TabularForm::INPUT_TEXT],
        'jenis' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'kakak_asuh' => 'Kakak asuh', 'rutin' => 'Rutin', 'insidental' => 'Insidental', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Jenis'],
                    ]
        ],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPemasukan(' . $key . '); return false;', 'id' => 'pemasukan-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Pemasukan', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPemasukan()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

