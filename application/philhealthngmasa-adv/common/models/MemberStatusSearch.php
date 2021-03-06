<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberStatus;

/**
 * MemberStatusSearch represents the model behind the search form about `app\models\MemberStatus`.
 */
class MemberStatusSearch extends MemberStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ms_id', 'member_records_mr_id'], 'integer'],
            [['ms_description', 'ms_date'], 'safe'],
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
        $query = MemberStatus::find();

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
            'ms_id' => $this->ms_id,
            'ms_date' => $this->ms_date,
            'member_records_mr_id' => $this->member_records_mr_id,
        ]);

        $query->andFilterWhere(['like', 'ms_description', $this->ms_description]);

        return $dataProvider;
    }
}
