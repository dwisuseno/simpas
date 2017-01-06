<?php

namespace app\models;

use \app\models\base\Pengeluaran as BasePengeluaran;

/**
 * This is the model class for table "pengeluaran".
 */
class Pengeluaran extends BasePengeluaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jumlah'], 'integer'],
            [['nama', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['no_pengiriman'], 'string', 'max' => 20],
            [['bukti_pengeluaran'], 'string', 'max' => 100],
            [['ket_pengeluaran'], 'string', 'max' => 500]
        ]);
    }
	
}
