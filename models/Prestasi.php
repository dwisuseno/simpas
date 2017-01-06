<?php

namespace app\models;

use \app\models\base\Prestasi as BasePrestasi;

/**
 * This is the model class for table "prestasi".
 */
class Prestasi extends BasePrestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_grantee'], 'integer'],
            [['deskripsi', 'tingkat', 'semester'], 'string'],
            [['tanggal'], 'safe'],
            [['nama', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['path_photo'], 'string', 'max' => 255]
        ]);
    }
	
}
