<?php

namespace app\models;

use \app\models\base\Donatur as BaseDonatur;

/**
 * This is the model class for table "donatur".
 */
class Donatur extends BaseDonatur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['kakak_asuh'], 'string'],
            [['nama', 'alamat', 'email', 'pekerjaan', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['nomor_ktp'], 'string', 'max' => 30],
            [['telp'], 'string', 'max' => 12]
        ]);
    }
	
}
