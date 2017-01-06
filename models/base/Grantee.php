<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "grantee".
 *
 * @property integer $id
 * @property integer $id_donatur
 * @property string $nama_lengkap
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $nama_sekolah
 * @property string $alamat_sekolah
 * @property string $telp_sekolah
 * @property string $asal_sekolah
 * @property string $intake
 * @property string $nama_bank
 * @property integer $nomor_rekening
 * @property string $atas_nama_rekening
 * @property string $status
 * @property string $jenis_beasiswa
 * @property string $jurusan
 * @property string $path_foto
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\Donatur $donatur
 * @property \app\models\LaporanAkademik[] $laporanAkademiks
 * @property \app\models\Prestasi[] $prestasis
 */
class Grantee extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_donatur', 'nomor_rekening'], 'integer'],
            [['tgl_lahir', 'intake'], 'safe'],
            [['status'], 'string'],
            [['nama_lengkap', 'nama_sekolah', 'asal_sekolah', 'atas_nama_rekening', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 255],
            [['alamat_sekolah'], 'string', 'max' => 140],
            [['telp_sekolah'], 'string', 'max' => 15],
            [['nama_bank', 'jenis_beasiswa', 'jurusan'], 'string', 'max' => 20],
            [['path_foto'], 'string', 'max' => 30]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grantee';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_donatur' => 'Id Donatur',
            'nama_lengkap' => 'Nama Lengkap',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'nama_sekolah' => 'Nama Sekolah',
            'alamat_sekolah' => 'Alamat Sekolah',
            'telp_sekolah' => 'Telp Sekolah',
            'asal_sekolah' => 'Asal Sekolah',
            'intake' => 'Intake',
            'nama_bank' => 'Nama Bank',
            'nomor_rekening' => 'Nomor Rekening',
            'atas_nama_rekening' => 'Atas Nama Rekening',
            'status' => 'Status',
            'jenis_beasiswa' => 'Jenis Beasiswa',
            'jurusan' => 'Jurusan',
            'path_foto' => 'Path Foto',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonatur()
    {
        return $this->hasOne(\app\models\Donatur::className(), ['id' => 'id_donatur']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAkademiks()
    {
        return $this->hasMany(\app\models\LaporanAkademik::className(), ['id_grantee' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestasis()
    {
        return $this->hasMany(\app\models\Prestasi::className(), ['id_grantee' => 'id']);
    }
    
/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\GranteeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\GranteeQuery(get_called_class());
    }
}
