<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barangay_personnel".
 *
 * @property string $per_datehired
 * @property integer $member_records_mr_id
 */
class BarangayPersonnel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barangay_personnel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['per_datehired', 'member_records_mr_id'], 'required'],
            [['per_datehired'], 'safe'],
            [['member_records_mr_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'per_datehired' => 'DATE HIRED',
            'member_records_mr_id' => 'MEMBER ID',
        ];
    }
}
