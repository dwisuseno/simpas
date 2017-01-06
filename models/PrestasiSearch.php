<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prestasi;

/**
 * app\models\PrestasiSearch represents the model behind the search form about `app\models\Prestasi`.
 */
 class PrestasiSearch extends Prestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_grantee'], 'integer'],
            [['nama', 'deskripsi', 'tanggal', 'tingkat', 'semester', 'path_photo', 'created_at', 'updated_at'], 'safe'],
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
        $query = Prestasi::find();

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
            'id_grantee' => $this->id_grantee,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'tingkat', $this->tingkat])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'path_photo', $this->path_photo])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
