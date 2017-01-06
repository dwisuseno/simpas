<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "donatur".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nomor_ktp
 * @property string $alamat
 * @property string $telp
 * @property string $email
 * @property string $pekerjaan
 * @property string $kakak_asuh
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\Grantee[] $grantees
 * @property \app\models\Pemasukan[] $pemasukans
 */
class Donatur extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kakak_asuh'], 'string'],
            [['nama', 'alamat', 'email', 'pekerjaan', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['nomor_ktp'], 'string', 'max' => 30],
            [['telp'], 'string', 'max' => 12]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donatur';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nomor_ktp' => 'Nomor Ktp',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'email' => 'Email',
            'pekerjaan' => 'Pekerjaan',
            'kakak_asuh' => 'Kakak Asuh',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrantees()
    {
        return $this->hasMany(\app\models\Grantee::className(), ['id_donatur' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemasukans()
    {
        return $this->hasMany(\app\models\Pemasukan::className(), ['id_donatur' => 'id']);
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
     * @return \app\models\DonaturQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DonaturQuery(get_called_class());
    }
}
