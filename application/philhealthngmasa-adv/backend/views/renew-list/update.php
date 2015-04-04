<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RenewList */

$this->title = 'Update Renew List: ' . ' ' . $model->rl_control_no;
$this->params['breadcrumbs'][] = ['label' => 'Renew Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rl_control_no, 'url' => ['view', 'id' => $model->rl_control_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="renew-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
