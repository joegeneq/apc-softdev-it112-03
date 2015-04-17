<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $ev_id
 * @property string $ev_title
 * @property string $ev_date
 * @property string $ev_location
 * @property string $ev_desc
 */
class event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ev_title', 'ev_date', 'ev_location', 'ev_desc'], 'required'],
            [['ev_date'], 'safe'],
            [['ev_title', 'ev_location'], 'string', 'max' => 45],
            [['ev_desc'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ev_id' => 'Ev ID',
            'ev_title' => 'Ev Title',
            'ev_date' => 'Ev Date',
            'ev_location' => 'Ev Location',
            'ev_desc' => 'Ev Desc',
        ];
    }
}
