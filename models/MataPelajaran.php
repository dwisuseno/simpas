<?php

namespace app\models;

use \app\models\base\MataPelajaran as BaseMataPelajaran;

/**
 * This is the model class for table "mata_pelajaran".
 */
class MataPelajaran extends BaseMataPelajaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['mata_pelajaran'], 'string', 'max' => 60],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ]);
    }
	
}
