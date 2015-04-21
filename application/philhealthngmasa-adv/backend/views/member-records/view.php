<script type="text/javascript">
<!--//
function sizeFrame(frameId) {
var F = document.getElementById(frameId);
if(F.contentDocument) {
F.height = F.contentDocument.documentElement.scrollHeight+30; //FF 3.0.11, Opera 9.63, and Chrome
} else {
F.height = F.contentWindow.document.body.scrollHeight+30; //IE6, IE7 and Chrome
}
}
// window.onload=sizeFrame; 
//-->
</script>



<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

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

<?php

    $attributes = [
        [
        'group'=>true,
        'label'=>'SECTION 1: Member Records',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
        ],

        'mr_id',    
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

        [
            'group'=>true,
            'label'=>'SECTION 2: Dependents',
            'rowOptions'=>['class'=>'info'],
            //'groupOptions'=>['class'=>'text-center']
        ],
    ]
        
    ?>

<?php
    echo DetailView::widget([
    'model'=>$model,
    'condensed'=>true,
    'hover'=>true,
    'mode'=>DetailView::MODE_VIEW,
    'panel'=>false,
    'attributes'=> $attributes,
]);
/*
    echo ListView::widget( [
        'dataProvider' => $dataProvider,
        'itemView' => '_requirements_items',
    ] );*/
?>

<iframe width="100%" id="myFrame" 
src="index.php?DependentsSearch%5Bmember_records_mr_id%5D=<?= $model->mr_id?>&r=dependents%2Findex"
    scrolling="no" frameborder="0" onload="sizeFrame('myFrame')">
</iframe>

</div>    