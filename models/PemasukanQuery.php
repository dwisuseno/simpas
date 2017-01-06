<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pemasukan]].
 *
 * @see Pemasukan
 */
class PemasukanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pemasukan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pemasukan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}