<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberRecordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Member Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-records-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Member Records', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mr_id',
            'mr_lname',
            'mr_fname',
            'mr_mname',
            'mr_bdate',
            // 'mr_civ_stat',
            // 'mr_gender',
            // 'mr_dependent',
            // 'mr_type',
            // 'mr_house_no',
            // 'mr_street',
            // 'mr_brarangay',
            // 'mr_city',
            // 'mr_zipcode',
            // 'mr_status',
            // 'mr_mobile',
            // 'mr_tel_no',
            // 'mr_office_no',
            // 'mr_email_ad:email',
            // 'mr_alter_emal_ad',
            // 'mr_reg_date',
            // 'mr_exp_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
