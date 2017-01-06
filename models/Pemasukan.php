<?php

namespace app\models;

use \app\models\base\Pemasukan as BasePemasukan;

/**
 * This is the model class for table "pemasukan".
 */
class Pemasukan extends BasePemasukan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_donatur', 'jumlah'], 'integer'],
            [['jenis'], 'string'],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ]);
    }
	
}
