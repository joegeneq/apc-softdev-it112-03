<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */

$this->title = 'Create Member Records';
$this->params['breadcrumbs'][] = ['label' => 'Member Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
