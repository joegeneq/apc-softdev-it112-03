<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

use common\models\MemberRecords;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DependentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dependents';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="dependents-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dependents', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php



   $gridColumns = [
         [
            'class' => 'kartik\grid\SerialColumn',
            'contentOptions' => ['class' => 'kartik-sheet-style'],
            'header' => '',
            'headerOptions' => ['class' => 'kartik-sheet-style']
        ],
            [
            'attribute' => 'member_records_mr_id', 'label' => 'MEMBER ID',
            'width'=>'250px',
            'format' => 'raw',
            'value'=>function ($model, $key, $index, $widget) { 
             return Html::a($model->memberRecordsMr->mr_id,  
                './index.php?r=member-records%2Fview&id='.$model->memberRecordsMr->mr_id,
                ['title'=>'View Member details']
                );
            },

            ], 
            ['attribute' => 'name', 'label' => 'NAME OF DEPENDENTS'],
            ['attribute' => 'relationship', 'label' => 'RELATIONSHIP TO CARDHOLDER'],

        ['class' => 'kartik\grid\ActionColumn'],


        ];

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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>&nbsp&nbsp List of Member Dependents</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add Dependents', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
        ],

    ]); 

    ?>

</div>
