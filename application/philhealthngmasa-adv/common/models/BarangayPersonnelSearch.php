<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarangayPersonnel;

/**
 * BarangayPersonnelSearch represents the model behind the search form about `common\models\BarangayPersonnel`.
 */
class BarangayPersonnelSearch extends BarangayPersonnel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['per_datehired'], 'safe'],
            [['member_records_mr_id'], 'integer'],
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
        $query = BarangayPersonnel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'per_datehired' => $this->per_datehired,
            'member_records_mr_id' => $this->member_records_mr_id,
        ]);

        return $dataProvider;
    }
}
