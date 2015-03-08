<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */

$this->title = 'Update Member Records: ' . ' ' . $model->phid;
$this->params['breadcrumbs'][] = ['label' => 'Member Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->phid, 'url' => ['view', 'id' => $model->phid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-records-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
