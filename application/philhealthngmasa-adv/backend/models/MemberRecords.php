<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member_records".
 *
 * @property string $phid
 * @property integer $zipcode
 * @property string $house_no
 * @property string $city
 * @property string $mobile
 * @property string $home
 * @property string $office
 * @property string $alt_email
 * @property string $status
 * @property string $lname
 * @property string $fname
 * @property string $mname
 * @property string $birthdate
 * @property string $civilstat
 * @property string $gender
 * @property string $dependent
 * @property string $street
 * @property string $barangay
 * @property string $emailad
 * @property string $regdate
 * @property string $expdate
 * @property string $type
 * @property string $remarks
 * @property string $image_url
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
            [['phid', 'lname', 'fname', 'street', 'regdate', 'expdate'], 'required'],
            [['zipcode'], 'integer'],
            [['birthdate', 'regdate', 'expdate'], 'safe'],
            [['remarks'], 'string'],
            [['phid', 'city', 'mobile', 'home', 'office', 'status', 'barangay'], 'string', 'max' => 15],
            [['house_no', 'alt_email', 'street', 'emailad'], 'string', 'max' => 50],
            [['lname', 'fname', 'mname', 'civilstat'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 6],
            [['dependent'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 25],
            [['image_url'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phid' => 'Phid',
            'zipcode' => 'Zipcode',
            'house_no' => 'House No',
            'city' => 'City',
            'mobile' => 'Mobile',
            'home' => 'Home',
            'office' => 'Office',
            'alt_email' => 'Alt Email',
            'status' => 'Status',
            'lname' => 'Lname',
            'fname' => 'Fname',
            'mname' => 'Mname',
            'birthdate' => 'Birthdate',
            'civilstat' => 'Civilstat',
            'gender' => 'Gender',
            'dependent' => 'Dependent',
            'street' => 'Street',
            'barangay' => 'Barangay',
            'emailad' => 'Emailad',
            'regdate' => 'Regdate',
            'expdate' => 'Expdate',
            'type' => 'Type',
            'remarks' => 'Remarks',
            'image_url' => 'Image Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberStatuses()
    {
        return $this->hasMany(MemberStatus::className(), ['mem_phid' => 'phid']);
    }
}
