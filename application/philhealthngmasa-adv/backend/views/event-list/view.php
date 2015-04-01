<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\EventList */

$this->title = $model->el_ctrlno;
$this->params['breadcrumbs'][] = ['label' => 'Event Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'el_ctrlno' => $model->el_ctrlno, 'mr_id' => $model->mr_id, 'ev_id' => $model->ev_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'el_ctrlno' => $model->el_ctrlno, 'mr_id' => $model->mr_id, 'ev_id' => $model->ev_id], [
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
            'el_ctrlno',
            'el_date',
            'el_event',
            'el_venue',
            'mr_id',
            'ev_id',
        ],
    ]) ?>

</div>
