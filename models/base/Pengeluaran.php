<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "pengeluaran".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $jumlah
 * @property string $no_pengiriman
 * @property string $bukti_pengeluaran
 * @property string $ket_pengeluaran
 * @property string $created_at
 * @property string $updated_at
 */
class Pengeluaran extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jumlah'], 'integer'],
            [['nama', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['no_pengiriman'], 'string', 'max' => 20],
            [['bukti_pengeluaran'], 'string', 'max' => 100],
            [['ket_pengeluaran'], 'string', 'max' => 500]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jumlah' => 'Jumlah',
            'no_pengiriman' => 'No Pengiriman',
            'bukti_pengeluaran' => 'Bukti Pengeluaran',
            'ket_pengeluaran' => 'Ket Pengeluaran',
        ];
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
     * @return \app\models\PengeluaranQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PengeluaranQuery(get_called_class());
    }
}
