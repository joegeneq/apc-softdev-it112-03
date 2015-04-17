<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberRecordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Member Records';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="header">
    <div class="wrap">
        <div class="top-nav">
            <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="./index.php?r=site%2Fabout">ABOUT US</a></li>
                        <li class="active"><a href="./index.php?r=member-records">SEARCH MEMBER</a></li>
                        <li><a href="./index.php?r=site%2Fabout">EVENTS</a></li>
                        <li><a href="./index.php?r=site%2Fcontact">CONTACT</a></li>
            </ul>
        </div>
    <div class="clear"> </div>
    </div>
</div>


<div class="member-records-index">

    <h1><?= Html::encode($this->title) ?></h1>
 <?php
    $gridColumns = [
        [
            'class' => 'kartik\grid\SerialColumn',
            'contentOptions' => ['class' => 'kartik-sheet-style'],
            'header' => '',
            'headerOptions' => ['class' => 'kartik-sheet-style']
        ],
            ['attribute' => 'mr_id', 'label' => 'MEMBER ID'],
            ['attribute' => 'mr_lname', 'label' => 'LAST NAME'],
            ['attribute' => 'mr_fname', 'label' => 'FIRST NAME'],
            ['attribute' => 'mr_status', 'label' => 'MEMBERSHIP STATUS'], 
            ['attribute' => 'mr_reg_date', 'label' => 'REGISTRATION DATE'],             
            ['attribute' => 'mr_exp_date', 'label' => 'EXPIRATION DATE'],

     


        ];

/***
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Member Records', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
***/    

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'responsive' => true,
        'hover' => true,

  'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax' => true, 
        'floatHeader'=>true,
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>&nbsp&nbsp List of Member Records</h3>',
            'type'=>GridView::TYPE_PRIMARY,
        ],

    ]); 

    ?>

</div>
