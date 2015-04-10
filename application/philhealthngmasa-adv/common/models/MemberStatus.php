<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_status".
 *
 * @property integer $ms_id
 * @property string $ms_description
 * @property string $ms_date
 * @property integer $member_records_mr_id
 *
 * @property MemberRecords $memberRecordsMr
 */
class MemberStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ms_description', 'member_records_mr_id'], 'required'],
            [['ms_date'], 'safe'],
            [['member_records_mr_id'], 'integer'],
            [['ms_description'], 'string', 'max' => 450]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ms_id' => 'STATUS ID',
            'ms_description' => 'STATUS DESCRIPTION',
            'ms_date' => 'STATUS DATE',
            'member_records_mr_id' => 'MEMBER ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberRecordsMr()
    {
        return $this->hasOne(MemberRecords::className(), ['mr_id' => 'member_records_mr_id']);
    }
}
