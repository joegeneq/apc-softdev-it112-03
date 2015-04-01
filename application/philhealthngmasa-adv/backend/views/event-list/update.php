<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EventList */

$this->title = 'Update Event List: ' . ' ' . $model->el_ctrlno;
$this->params['breadcrumbs'][] = ['label' => 'Event Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->el_ctrlno, 'url' => ['view', 'el_ctrlno' => $model->el_ctrlno, 'mr_id' => $model->mr_id, 'ev_id' => $model->ev_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
