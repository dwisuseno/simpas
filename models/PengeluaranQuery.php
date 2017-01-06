<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pengeluaran]].
 *
 * @see Pengeluaran
 */
class PengeluaranQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pengeluaran[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pengeluaran|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}