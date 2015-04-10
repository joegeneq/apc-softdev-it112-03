<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $ev_id
 * @property string $ev_name
 * @property string $ev_description
 *
 * @property EventList[] $eventLists
 */
class Event extends \yii\db\ActiveRecord
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
            [['ev_id'], 'required'],
            [['ev_id'], 'integer'],
            [['ev_name', 'ev_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ev_id' => 'EVENT ID',
            'ev_name' => 'EVENT NAME',
            'ev_description' => 'EVENT DESCRIPTION',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventLists()
    {
        return $this->hasMany(EventList::className(), ['ev_id' => 'ev_id']);
    }
}
