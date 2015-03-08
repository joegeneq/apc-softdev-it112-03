<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mem_phid')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'ms_description')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ms_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
