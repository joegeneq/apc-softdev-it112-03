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
            'ev_id' => 'EVENT ID',
            'ev_title' => 'EVENT TITLE',
            'ev_date' => 'EVENT DATE',
            'ev_location' => 'EVENT LOCATION',
            'ev_desc' => 'EVENT DESCRIPTION',
        ];
    }
}
