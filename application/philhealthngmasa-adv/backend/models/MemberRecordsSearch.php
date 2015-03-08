<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MemberRecords;

/**
 * MemberRecordsSearch represents the model behind the search form about `app\models\MemberRecords`.
 */
class MemberRecordsSearch extends MemberRecords
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phid', 'house_no', 'city', 'mobile', 'home', 'office', 'alt_email', 'status', 'lname', 'fname', 'mname', 'birthdate', 'civilstat', 'gender', 'dependent', 'street', 'barangay', 'emailad', 'regdate', 'expdate', 'type', 'remarks', 'image_url'], 'safe'],
            [['zipcode'], 'integer'],
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
        $query = MemberRecords::find();

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
            'zipcode' => $this->zipcode,
            'birthdate' => $this->birthdate,
            'regdate' => $this->regdate,
            'expdate' => $this->expdate,
        ]);

        $query->andFilterWhere(['like', 'phid', $this->phid])
            ->andFilterWhere(['like', 'house_no', $this->house_no])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'home', $this->home])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'alt_email', $this->alt_email])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'civilstat', $this->civilstat])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'dependent', $this->dependent])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'barangay', $this->barangay])
            ->andFilterWhere(['like', 'emailad', $this->emailad])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'image_url', $this->image_url]);

        return $dataProvider;
    }
}
