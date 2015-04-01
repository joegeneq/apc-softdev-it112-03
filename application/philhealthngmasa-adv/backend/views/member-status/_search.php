<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ms_id') ?>

    <?= $form->field($model, 'ms_description') ?>

    <?= $form->field($model, 'ms_date') ?>

    <?= $form->field($model, 'member_records_mr_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
