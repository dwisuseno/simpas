<?php

namespace app\models;

use \app\models\base\LaporanAkademik as BaseLaporanAkademik;

/**
 * This is the model class for table "laporan_akademik".
 */
class LaporanAkademik extends BaseLaporanAkademik
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_grantee'], 'integer'],
            [['deskripsi', 'semester'], 'string'],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ]);
    }
	
}
