<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MemberStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Member Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Member Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'member_records_mr_id',
            'ms_description',
            'ms_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
