<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */

$this->title = $model->mr_id;
$this->params['breadcrumbs'][] = ['label' => 'Member Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-records-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'mr_id', 'label' => 'ID'],
            ['attribute' => 'mr_lname', 'label' => 'LAST NAME'],
            ['attribute' => 'mr_fname', 'label' => 'FIRST NAME'],
            ['attribute' => 'mr_mname', 'label' => 'MIDDLE NAME'],
            ['attribute' => 'mr_bdate', 'label' => 'BIRTH DATE'],
            ['attribute' => 'mr_civ_stat', 'label' => 'CIVIL STATUS'],
            ['attribute' => 'mr_gender', 'label' => 'GENDER'],
            ['attribute' => 'mr_type', 'label' => 'TYPE'],
            ['attribute' => 'mr_house_no', 'label' => 'HOUSE #'],
            ['attribute' => 'mr_street', 'label' => 'STREET'],
            ['attribute' => 'mr_brarangay', 'label' => 'BARANGAY'],
            ['attribute' => 'mr_city', 'label' => 'CITY'],
            ['attribute' => 'mr_zipcode', 'label' => 'ZIPCODE'],
            ['attribute' => 'mr_status', 'label' => 'STATUS'],
            ['attribute' => 'mr_mobile', 'label' => 'MOBILE'],
            ['attribute' => 'mr_tel_no', 'label' => 'TELEPHONE #'],
            ['attribute' => 'mr_office_no', 'label' => 'OFFICE #'],
            ['attribute' => 'mr_email_ad', 'label' => 'EMAIL ADDRESS'],
            ['attribute' => 'mr_alter_emal_ad', 'label' => 'ALTER EMAIL'],
            ['attribute' => 'mr_reg_date', 'label' => 'REGISTER DATE'],
            ['attribute' => 'mr_exp_date', 'label' => 'EXPIRY DATE'],
        ],
    ]) ?>

</div>
