<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Grantee;

/**
 * app\models\GranteeSearch represents the model behind the search form about `app\models\Grantee`.
 */
 class GranteeSearch extends Grantee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_donatur', 'nomor_rekening'], 'integer'],
            [['nama_lengkap', 'tgl_lahir', 'alamat', 'nama_sekolah', 'alamat_sekolah', 'telp_sekolah', 'asal_sekolah', 'intake', 'nama_bank', 'atas_nama_rekening', 'status', 'jenis_beasiswa', 'jurusan', 'path_foto', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Grantee::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_donatur' => $this->id_donatur,
            'tgl_lahir' => $this->tgl_lahir,
            'intake' => $this->intake,
            'nomor_rekening' => $this->nomor_rekening,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nama_sekolah', $this->nama_sekolah])
            ->andFilterWhere(['like', 'alamat_sekolah', $this->alamat_sekolah])
            ->andFilterWhere(['like', 'telp_sekolah', $this->telp_sekolah])
            ->andFilterWhere(['like', 'asal_sekolah', $this->asal_sekolah])
            ->andFilterWhere(['like', 'nama_bank', $this->nama_bank])
            ->andFilterWhere(['like', 'atas_nama_rekening', $this->atas_nama_rekening])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'jenis_beasiswa', $this->jenis_beasiswa])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'path_foto', $this->path_foto])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
