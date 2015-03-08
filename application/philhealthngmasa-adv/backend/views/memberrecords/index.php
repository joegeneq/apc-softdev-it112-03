<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
	<div class="wrap">
		<div class="about-us">
			<div class="about-header">
				<h3>MEMBER RECORDS</h3>
			</div>
		</div>
	</div>
</div>			
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

            'phid',
            'zipcode',
            'house_no',
            'city',
            'mobile',
            // 'home',
            // 'office',
            // 'alt_email:email',
            // 'status',
            // 'lname',
            // 'fname',
            // 'mname',
            // 'birthdate',
            // 'civilstat',
            // 'gender',
            // 'dependent',
            // 'street',
            // 'barangay',
            // 'emailad:email',
            // 'regdate',
            // 'expdate',
            // 'type',
            // 'remarks:ntext',
            // 'image_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
