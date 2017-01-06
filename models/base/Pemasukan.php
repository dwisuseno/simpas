<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "pemasukan".
 *
 * @property integer $id
 * @property integer $id_donatur
 * @property integer $jumlah
 * @property string $jenis
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \app\models\Donatur $donatur
 */
class Pemasukan extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_donatur', 'jumlah'], 'integer'],
            [['jenis'], 'string'],
            [['created_at', 'updated_at'], 'string', 'max' => 50]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemasukan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_donatur' => 'Id Donatur',
            'jumlah' => 'Jumlah',
            'jenis' => 'Jenis',
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
     * @return \app\models\PemasukanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PemasukanQuery(get_called_class());
    }
}
