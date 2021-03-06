<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Event;

/**
 * EventSearch represents the model behind the search form about `common\models\Event`.
 */
class EventSearch extends Event
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ev_id'], 'integer'],
            [['ev_title', 'ev_date', 'ev_location', 'ev_desc', 'ev_content'], 'safe'],
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
        $query = Event::find();

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
            'ev_id' => $this->ev_id,
            'ev_date' => $this->ev_date,
        ]);

        $query->andFilterWhere(['like', 'ev_title', $this->ev_title])
            ->andFilterWhere(['like', 'ev_location', $this->ev_location])
            ->andFilterWhere(['like', 'ev_desc', $this->ev_desc])
            ->andFilterWhere(['like', 'ev_content', $this->ev_content]);

        return $dataProvider;
    }
}
