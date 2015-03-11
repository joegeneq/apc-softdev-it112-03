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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mr_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mr_id',
            'mr_lname',
            'mr_fname',
            'mr_mname',
            'mr_bdate',
            'mr_civ_stat',
            'mr_gender',
            'mr_dependent',
            'mr_type',
            'mr_house_no',
            'mr_street',
            'mr_brarangay',
            'mr_city',
            'mr_zipcode',
            'mr_status',
            'mr_mobile',
            'mr_tel_no',
            'mr_office_no',
            'mr_email_ad:email',
            'mr_alter_emal_ad',
            'mr_reg_date',
            'mr_exp_date',
        ],
    ]) ?>

</div>
