<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */

$this->title = $model->phid;
$this->params['breadcrumbs'][] = ['label' => 'Member Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-records-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->phid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->phid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'phid',
            'zipcode',
            'house_no',
            'city',
            'mobile',
            'home',
            'office',
            'alt_email:email',
            'status',
            'lname',
            'fname',
            'mname',
            'birthdate',
            'civilstat',
            'gender',
            'dependent',
            'street',
            'barangay',
            'emailad:email',
            'regdate',
            'expdate',
            'type',
            'remarks:ntext',
            'image_url:url',
        ],
    ]) ?>

</div>
