<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Donatur]].
 *
 * @see Donatur
 */
class DonaturQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Donatur[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Donatur|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}