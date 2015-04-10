<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_records".
 *
 * @property integer $mr_id
 * @property string $mr_lname
 * @property string $mr_fname
 * @property string $mr_mname
 * @property string $mr_bdate
 * @property string $mr_civ_stat
 * @property string $mr_gender
 * @property string $mr_dependent
 * @property string $mr_type
 * @property string $mr_house_no
 * @property string $mr_street
 * @property string $mr_brarangay
 * @property string $mr_city
 * @property string $mr_zipcode
 * @property string $mr_status
 * @property string $mr_mobile
 * @property string $mr_tel_no
 * @property string $mr_office_no
 * @property string $mr_email_ad
 * @property string $mr_alter_emal_ad
 * @property string $mr_reg_date
 * @property string $mr_exp_date
 *
 * @property MemberStatus[] $memberStatuses
 */
class MemberRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mr_lname', 'mr_fname', 'mr_mname', 'mr_bdate', 'mr_civ_stat', 'mr_gender', 'mr_dependent', 'mr_type', 'mr_house_no', 'mr_status', 'mr_mobile', 'mr_reg_date', 'mr_exp_date'], 'required'],
            [['mr_id'], 'integer'],
            [['mr_bdate', 'mr_reg_date', 'mr_exp_date'], 'safe'],
            [['mr_lname', 'mr_fname', 'mr_mname', 'mr_civ_stat', 'mr_gender', 'mr_dependent', 'mr_type', 'mr_house_no', 'mr_street', 'mr_brarangay', 'mr_city', 'mr_zipcode', 'mr_status', 'mr_mobile', 'mr_tel_no', 'mr_office_no', 'mr_email_ad', 'mr_alter_emal_ad'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mr_id' => 'ID',
            'mr_lname' => 'LAST NAME',
            'mr_fname' => 'FIRST NAME',
            'mr_mname' => 'MIDDLE NAME',
            'mr_bdate' => 'BIRTH DATE',
            'mr_civ_stat' => 'CIVIL STATUS',
            'mr_gender' => 'GENDER',
            'mr_dependent' => 'DEPENDENT',
            'mr_type' => 'TYPE',
            'mr_house_no' => 'HOUSE NO.',
            'mr_street' => 'STREET',
            'mr_brarangay' => 'BARANGAY',
            'mr_city' => 'CITY',
            'mr_zipcode' => 'ZIPCODE',
            'mr_status' => 'STATUS',
            'mr_mobile' => 'MOBILE NO.',
            'mr_tel_no' => 'TELEPHONE NO.',
            'mr_office_no' => 'OFFICE NO.',
            'mr_email_ad' => 'EMAIL ADDRESS',
            'mr_alter_emal_ad' => 'ALTERNATE EMAIL ADDRESS',
            'mr_reg_date' => 'REGISTRATION DATE',
            'mr_exp_date' => 'EXPIRATION DATE',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberStatus()
    {
        return $this->hasMany(MemberStatus::className(), ['member_records_mr_id' => 'mr_id']);
    }
}
