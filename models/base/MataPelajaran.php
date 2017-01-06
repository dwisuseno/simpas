<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "mata_pelajaran".
 *
 * @property integer $id
 * @property string $mata_pelajaran
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\Nilai[] $nilais
 */
class MataPelajaran extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mata_pelajaran'], 'string', 'max' => 60],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mata_pelajaran';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mata_pelajaran' => 'Mata Pelajaran',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(\app\models\Nilai::className(), ['id_mata_pelajaran' => 'id']);
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
     * @return \app\models\MataPelajaranQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\MataPelajaranQuery(get_called_class());
    }
}
