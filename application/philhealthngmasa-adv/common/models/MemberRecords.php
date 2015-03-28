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
            [['mr_id', 'mr_lname', 'mr_fname', 'mr_mname', 'mr_bdate', 'mr_civ_stat', 'mr_gender', 'mr_dependent', 'mr_type', 'mr_house_no', 'mr_status', 'mr_mobile', 'mr_reg_date', 'mr_exp_date'], 'required'],
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
            'mr_id' => 'Mr ID',
            'mr_lname' => 'Mr Lname',
            'mr_fname' => 'Mr Fname',
            'mr_mname' => 'Mr Mname',
            'mr_bdate' => 'Mr Bdate',
            'mr_civ_stat' => 'Mr Civ Stat',
            'mr_gender' => 'Mr Gender',
            'mr_dependent' => 'Mr Dependent',
            'mr_type' => 'Mr Type',
            'mr_house_no' => 'Mr House No',
            'mr_street' => 'Mr Street',
            'mr_brarangay' => 'Mr Brarangay',
            'mr_city' => 'Mr City',
            'mr_zipcode' => 'Mr Zipcode',
            'mr_status' => 'Mr Status',
            'mr_mobile' => 'Mr Mobile',
            'mr_tel_no' => 'Mr Tel No',
            'mr_office_no' => 'Mr Office No',
            'mr_email_ad' => 'Mr Email Ad',
            'mr_alter_emal_ad' => 'Mr Alter Emal Ad',
            'mr_reg_date' => 'Mr Reg Date',
            'mr_exp_date' => 'Mr Exp Date',
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
