<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Nilai]].
 *
 * @see Nilai
 */
class NilaiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Nilai[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Nilai|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}