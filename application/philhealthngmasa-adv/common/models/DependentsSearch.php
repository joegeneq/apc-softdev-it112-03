<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Dependents;

/**
 * DependentsSearch represents the model behind the search form about `common\models\Dependents`.
 */
class DependentsSearch extends Dependents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'member_records_mr_id'], 'integer'],
            [['name', 'relationship'], 'safe'],
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
        $query = Dependents::find();

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
            'id' => $this->id,
            'member_records_mr_id' => $this->member_records_mr_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'relationship', $this->relationship]);

        return $dataProvider;
    }
}
