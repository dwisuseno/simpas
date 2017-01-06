<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "nilai".
 *
 * @property integer $id
 * @property integer $id_laporan
 * @property integer $id_mata_pelajaran
 * @property integer $nilai
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\LaporanAkademik $laporan
 * @property \app\models\MataPelajaran $mataPelajaran
 */
class Nilai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_laporan', 'id_mata_pelajaran', 'nilai'], 'integer'],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_laporan' => 'Id Laporan',
            'id_mata_pelajaran' => 'Id Mata Pelajaran',
            'nilai' => 'Nilai',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLaporan()
    {
        return $this->hasOne(\app\models\LaporanAkademik::className(), ['id' => 'id_laporan']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMataPelajaran()
    {
        return $this->hasOne(\app\models\MataPelajaran::className(), ['id' => 'id_mata_pelajaran']);
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
     * @return \app\models\NilaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\NilaiQuery(get_called_class());
    }
}
