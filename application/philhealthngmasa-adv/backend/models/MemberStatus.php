<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member_status".
 *
 * @property integer $ms_id
 * @property string $mem_phid
 * @property string $ms_description
 * @property string $ms_date
 *
 * @property MemberRecords $memPh
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
            [['mem_phid'], 'required'],
            [['ms_date'], 'safe'],
            [['mem_phid'], 'string', 'max' => 15],
            [['ms_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ms_id' => 'Ms ID',
            'mem_phid' => 'Mem Phid',
            'ms_description' => 'Ms Description',
            'ms_date' => 'Ms Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemPh()
    {
        return $this->hasOne(MemberRecords::className(), ['phid' => 'mem_phid']);
    }
}
