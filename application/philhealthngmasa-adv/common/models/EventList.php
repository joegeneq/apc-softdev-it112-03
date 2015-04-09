<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event_list".
 *
 * @property integer $el_ctrlno
 * @property string $el_date
 * @property string $el_event
 * @property string $el_venue
 * @property integer $mr_id
 * @property integer $ev_id
 *
 * @property Event $ev
 * @property MemberRecords $mr
 */
class EventList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['el_ctrlno', 'mr_id', 'ev_id'], 'required'],
            [['el_ctrlno', 'mr_id', 'ev_id'], 'integer'],
            [['el_date'], 'safe'],
            [['el_event', 'el_venue'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'el_ctrlno' => 'El Ctrlno',
            'el_date' => 'Date of Event',
            'el_event' => 'Event Name',
            'el_venue' => 'Event Venue',
            'mr_id' => 'Mr ID',
            'ev_id' => 'Ev ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEv()
    {
        return $this->hasOne(Event::className(), ['ev_id' => 'ev_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMr()
    {
        return $this->hasOne(MemberRecords::className(), ['mr_id' => 'mr_id']);
    }
}
