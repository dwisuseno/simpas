<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemasukan;

/**
 * app\models\PemasukanSearch represents the model behind the search form about `app\models\Pemasukan`.
 */
 class PemasukanSearch extends Pemasukan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_donatur', 'jumlah'], 'integer'],
            [['jenis', 'created_at', 'updated_at'], 'safe'],
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
        $query = Pemasukan::find();

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
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
