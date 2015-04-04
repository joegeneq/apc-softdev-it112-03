<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RenewList;

/**
 * RenewListSearch represents the model behind the search form about `common\models\RenewList`.
 */
class RenewListSearch extends RenewList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rl_control_no', 'member_records_mr_id'], 'integer'],
            [['rl_date_created'], 'safe'],
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
        $query = RenewList::find();

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
            'rl_control_no' => $this->rl_control_no,
            'rl_date_created' => $this->rl_date_created,
            'member_records_mr_id' => $this->member_records_mr_id,
        ]);

        return $dataProvider;
    }
}
