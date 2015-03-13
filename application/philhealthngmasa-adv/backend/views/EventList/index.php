<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EventListSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Event Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'el_ctrlno',
            'el_date',
            'el_event',
            'el_venue',
            'mr_id',
            // 'ev_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
