<?php

namespace app\models;

use \app\models\base\Grantee as BaseGrantee;

/**
 * This is the model class for table "grantee".
 */
class Grantee extends BaseGrantee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_donatur', 'nomor_rekening'], 'integer'],
            [['tgl_lahir', 'intake'], 'safe'],
            [['status'], 'string'],
            [['nama_lengkap', 'nama_sekolah', 'asal_sekolah', 'atas_nama_rekening', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 255],
            [['alamat_sekolah'], 'string', 'max' => 140],
            [['telp_sekolah'], 'string', 'max' => 15],
            [['nama_bank', 'jenis_beasiswa', 'jurusan'], 'string', 'max' => 20],
            [['path_foto'], 'string', 'max' => 30]
        ]);
    }
	
}
