<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dependents".
 *
 * @property integer $id
 * @property string $name
 * @property string $relationship
 * @property integer $member_records_mr_id
 *
 * @property MemberRecords $member_records
 */
class Dependents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'relationship', 'member_records_mr_id'], 'required'],
            [['member_records_mr_id'], 'integer'],
            [['name', 'relationship'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'relationship' => 'Relationship to CardHolder',
            'member_records_mr_id' => 'Member Records ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberRecordsMr  ()
    {
        return $this->hasOne(MemberRecords::className(), ['mr_id' => 'member_records_mr_id']);
    }
}
