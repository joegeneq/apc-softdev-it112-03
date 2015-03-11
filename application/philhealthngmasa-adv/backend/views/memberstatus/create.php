<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MemberStatus */

$this->title = 'Create Member Status';
$this->params['breadcrumbs'][] = ['label' => 'Member Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
