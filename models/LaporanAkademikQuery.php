<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[LaporanAkademik]].
 *
 * @see LaporanAkademik
 */
class LaporanAkademikQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return LaporanAkademik[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LaporanAkademik|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}