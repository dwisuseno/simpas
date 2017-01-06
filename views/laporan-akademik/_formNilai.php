<div class="form-group" id="add-nilai">
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
    'formName' => 'Nilai',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'id_mata_pelajaran' => [
            'label' => 'Mata pelajaran',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\MataPelajaran::find()->orderBy('mata_pelajaran')->asArray()->all(), 'id', 'mata_pelajaran'),
                'options' => ['placeholder' => 'Choose Mata pelajaran'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'nilai' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowNilai(' . $key . '); return false;', 'id' => 'nilai-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Nilai', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowNilai()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

