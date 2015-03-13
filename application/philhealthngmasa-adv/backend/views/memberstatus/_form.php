<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ms_description')->textInput(['maxlength' => 450]) -> label('DESCRIPTION') ?>

    <?= $form->field($model, 'ms_date')->textInput() -> label('DATE') ?>

    <?= $form->field($model, 'member_records_mr_id')->textInput() -> label('MEMBER ID') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
