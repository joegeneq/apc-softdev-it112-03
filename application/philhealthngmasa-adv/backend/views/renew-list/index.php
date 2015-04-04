<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RenewListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Renew Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renew-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Renew List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rl_control_no',
            'rl_date_created',
            'member_records_mr_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
