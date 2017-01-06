<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "laporan_akademik".
 *
 * @property integer $id
 * @property integer $id_grantee
 * @property string $deskripsi
 * @property string $semester
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\Grantee $grantee
 * @property \app\models\Nilai[] $nilais
 */
class LaporanAkademik extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_grantee'], 'integer'],
            [['deskripsi', 'semester'], 'string'],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laporan_akademik';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_grantee' => 'Id Grantee',
            'deskripsi' => 'Deskripsi',
            'semester' => 'Semester',
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
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(\app\models\Nilai::className(), ['id_laporan' => 'id']);
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
     * @return \app\models\LaporanAkademikQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\LaporanAkademikQuery(get_called_class());
    }
}
