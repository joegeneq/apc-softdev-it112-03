<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Dependents */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dependents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependents-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'member_records_mr_id' => $model->member_records_mr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'member_records_mr_id' => $model->member_records_mr_id], [
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
            'member_records_mr_id',
            'name',
            'relationship',
        ],
    ]) ?>

</div>
