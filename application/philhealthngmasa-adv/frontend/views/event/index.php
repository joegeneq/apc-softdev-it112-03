<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="header">
    <div class="wrap">
    <div class="top-nav">
        <ul>
            <li class="active"><a href="index.php">HOME</a></li>
            <li><a href="./index.php?r=site%2Fabout">ABOUT US</a></li>
            <li><a href="./index.php?r=member-records">SEARCH MEMBER</a></li>
            <li><a href="./index.php?r=event">EVENTS</a></li>
            <li><a href="./index.php?r=site%2Fcontact">CONTACT</a></li>
        </ul>
    </div>
    <div class="clear"> </div>
    </div>
</div>

<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ev_id',
            'ev_title',
            'ev_date',
            'ev_location',
            'ev_desc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
