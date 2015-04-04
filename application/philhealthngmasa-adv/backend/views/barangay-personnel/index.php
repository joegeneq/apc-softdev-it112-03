<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BarangayPersonnelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangay Personnels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-personnel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barangay Personnel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'per_datehired',
            'member_records_mr_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
