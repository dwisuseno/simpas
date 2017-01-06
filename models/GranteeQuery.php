<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Grantee]].
 *
 * @see Grantee
 */
class GranteeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Grantee[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Grantee|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}