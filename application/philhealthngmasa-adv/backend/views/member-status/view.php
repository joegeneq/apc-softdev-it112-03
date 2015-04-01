<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MemberStatus */

$this->title = $model->ms_id;
$this->params['breadcrumbs'][] = ['label' => 'Member Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ms_id' => $model->ms_id, 'member_records_mr_id' => $model->member_records_mr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ms_id' => $model->ms_id, 'member_records_mr_id' => $model->member_records_mr_id], [
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
            ['attribute' => 'ms_id', 'label' => 'ID'],
            ['attribute' => 'ms_description', 'label' => 'DESCRIPTION'],
            ['attribute' => 'ms_date', 'label' => 'DATE'],
            ['attribute' => 'member_records_mr_id', 'label' => 'MEMBER ID'],
        ],
    ]) ?>

</div>
