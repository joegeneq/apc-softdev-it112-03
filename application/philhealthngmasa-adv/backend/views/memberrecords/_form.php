<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_id')->textInput() ?>

    <?= $form->field($model, 'mr_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_bdate')->textInput() ?>

    <?= $form->field($model, 'mr_civ_stat')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_gender')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_dependent')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_house_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_brarangay')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_city')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_zipcode')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_status')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_mobile')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_tel_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_office_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_email_ad')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_alter_emal_ad')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_reg_date')->textInput() ?>

    <?= $form->field($model, 'mr_exp_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
