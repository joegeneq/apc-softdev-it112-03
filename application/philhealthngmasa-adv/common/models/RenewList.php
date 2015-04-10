<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "renew_list".
 *
 * @property integer $rl_control_no
 * @property string $rl_date_created
 * @property integer $member_records_mr_id
 */
class RenewList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'renew_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rl_control_no', 'rl_date_created', 'member_records_mr_id'], 'required'],
            [['rl_control_no', 'member_records_mr_id'], 'integer'],
            [['rl_date_created'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rl_control_no' => 'CONTROL NO.',
            'rl_date_created' => 'DATE CREATED',
            'member_records_mr_id' => 'MEMBER ID',
        ];
    }
}
