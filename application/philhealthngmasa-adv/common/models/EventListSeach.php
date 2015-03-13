<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\EventList;

/**
 * EventListSeach represents the model behind the search form about `common\models\EventList`.
 */
class EventListSeach extends EventList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['el_ctrlno', 'mr_id', 'ev_id'], 'integer'],
            [['el_date', 'el_event', 'el_venue'], 'safe'],
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
        $query = EventList::find();

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
            'el_ctrlno' => $this->el_ctrlno,
            'el_date' => $this->el_date,
            'mr_id' => $this->mr_id,
            'ev_id' => $this->ev_id,
        ]);

        $query->andFilterWhere(['like', 'el_event', $this->el_event])
            ->andFilterWhere(['like', 'el_venue', $this->el_venue]);

        return $dataProvider;
    }
}
