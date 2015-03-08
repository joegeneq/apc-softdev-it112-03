<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MemberStatus */

$this->title = 'Update Member Status: ' . ' ' . $model->ms_id;
$this->params['breadcrumbs'][] = ['label' => 'Member Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ms_id, 'url' => ['view', 'id' => $model->ms_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
