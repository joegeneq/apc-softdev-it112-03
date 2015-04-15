<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberRecords;

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
            [['mr_id'], 'integer'],
            [['mr_lname', 'mr_fname', 'mr_mname', 'mr_bdate', 'mr_civ_stat', 'mr_gender', 'mr_type', 'mr_house_no', 'mr_street', 'mr_brarangay', 'mr_city', 'mr_zipcode', 'mr_status', 'mr_mobile', 'mr_tel_no', 'mr_office_no', 'mr_email_ad', 'mr_alter_emal_ad', 'mr_reg_date', 'mr_exp_date'], 'safe'],
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
            'mr_id' => $this->mr_id,
            'mr_bdate' => $this->mr_bdate,
            'mr_reg_date' => $this->mr_reg_date,
            'mr_exp_date' => $this->mr_exp_date,
        ]);

        $query->andFilterWhere(['like', 'mr_lname', $this->mr_lname])
            ->andFilterWhere(['like', 'mr_fname', $this->mr_fname])
            ->andFilterWhere(['like', 'mr_mname', $this->mr_mname])
            ->andFilterWhere(['like', 'mr_civ_stat', $this->mr_civ_stat])
            ->andFilterWhere(['like', 'mr_gender', $this->mr_gender])
            ->andFilterWhere(['like', 'mr_type', $this->mr_type])
            ->andFilterWhere(['like', 'mr_house_no', $this->mr_house_no])
            ->andFilterWhere(['like', 'mr_street', $this->mr_street])
            ->andFilterWhere(['like', 'mr_brarangay', $this->mr_brarangay])
            ->andFilterWhere(['like', 'mr_city', $this->mr_city])
            ->andFilterWhere(['like', 'mr_zipcode', $this->mr_zipcode])
            ->andFilterWhere(['like', 'mr_status', $this->mr_status])
            ->andFilterWhere(['like', 'mr_status', $this->mr_status])
            ->andFilterWhere(['like', 'mr_mobile', $this->mr_mobile])
            ->andFilterWhere(['like', 'mr_tel_no', $this->mr_tel_no])
            ->andFilterWhere(['like', 'mr_office_no', $this->mr_office_no])
            ->andFilterWhere(['like', 'mr_email_ad', $this->mr_email_ad])
            ->andFilterWhere(['like', 'mr_alter_emal_ad', $this->mr_alter_emal_ad]);

        return $dataProvider;
    }
}
