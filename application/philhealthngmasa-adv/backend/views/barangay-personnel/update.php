<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BarangayPersonnel */

$this->title = 'Update Barangay Personnel: ' . ' ' . $model->member_records_mr_id;
$this->params['breadcrumbs'][] = ['label' => 'Barangay Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_records_mr_id, 'url' => ['view', 'id' => $model->member_records_mr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangay-personnel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
