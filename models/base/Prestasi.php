<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "prestasi".
 *
 * @property integer $id
 * @property integer $id_grantee
 * @property string $nama
 * @property string $deskripsi
 * @property string $tanggal
 * @property string $tingkat
 * @property string $semester
 * @property string $path_photo
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\Grantee $grantee
 */
class Prestasi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_grantee'], 'integer'],
            [['deskripsi', 'tingkat', 'semester'], 'string'],
            [['tanggal'], 'safe'],
            [['nama', 'created_at', 'updated_at'], 'string', 'max' => 50],
            [['path_photo'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prestasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_grantee' => 'Id Grantee',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'tanggal' => 'Tanggal',
            'tingkat' => 'Tingkat',
            'semester' => 'Semester',
            'path_photo' => 'Path Photo',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrantee()
    {
        return $this->hasOne(\app\models\Grantee::className(), ['id' => 'id_grantee']);
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
     * @return \app\models\PrestasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PrestasiQuery(get_called_class());
    }
}
