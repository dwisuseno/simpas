<?php

namespace app\models;

use \app\models\base\Nilai as BaseNilai;

/**
 * This is the model class for table "nilai".
 */
class Nilai extends BaseNilai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_laporan', 'id_mata_pelajaran', 'nilai'], 'integer'],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ]);
    }
	
}
