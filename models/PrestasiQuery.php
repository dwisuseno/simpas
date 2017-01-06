<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Prestasi]].
 *
 * @see Prestasi
 */
class PrestasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Prestasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Prestasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}