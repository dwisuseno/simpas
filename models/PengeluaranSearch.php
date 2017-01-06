<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengeluaran;

/**
 * app\models\PengeluaranSearch represents the model behind the search form about `app\models\Pengeluaran`.
 */
 class PengeluaranSearch extends Pengeluaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah'], 'integer'],
            [['nama', 'no_pengiriman', 'bukti_pengeluaran', 'ket_pengeluaran', 'created_at', 'updated_at'], 'safe'],
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
        $query = Pengeluaran::find();

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
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_pengiriman', $this->no_pengiriman])
            ->andFilterWhere(['like', 'bukti_pengeluaran', $this->bukti_pengeluaran])
            ->andFilterWhere(['like', 'ket_pengeluaran', $this->ket_pengeluaran])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
