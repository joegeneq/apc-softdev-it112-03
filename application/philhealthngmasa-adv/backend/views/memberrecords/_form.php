<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_id')->textInput() -> label('ID') ?>

    <?= $form->field($model, 'mr_lname')->textInput(['maxlength' => 45]) -> label('LAST NAME') ?>

    <?= $form->field($model, 'mr_fname')->textInput(['maxlength' => 45]) -> label('FIRST NAME') ?>

    <?= $form->field($model, 'mr_mname')->textInput(['maxlength' => 45]) -> label('MIDDLE NAME') ?>

    <?= $form->field($model, 'mr_bdate')->textInput() -> label('BIRTH DATE') ?>

    <?= $form->field($model, 'mr_civ_stat')->textInput(['maxlength' => 45]) -> label('CIVIL STATUS') ?>

    <?= $form->field($model, 'mr_gender')->textInput(['maxlength' => 45]) -> label('GENDER') ?>

    <?= $form->field($model, 'mr_dependent')->textInput(['maxlength' => 45]) -> label('DEPENDENT') ?>

    <?= $form->field($model, 'mr_type')->textInput(['maxlength' => 45]) -> label('TYPE') ?>

    <?= $form->field($model, 'mr_house_no')->textInput(['maxlength' => 45]) -> label('HOUSE #') ?>

    <?= $form->field($model, 'mr_street')->textInput(['maxlength' => 45]) -> label('STREET') ?>

    <?= $form->field($model, 'mr_brarangay')->textInput(['maxlength' => 45]) -> label('BARANGAY') ?>

    <?= $form->field($model, 'mr_city')->textInput(['maxlength' => 45]) -> label('CITY') ?>

    <?= $form->field($model, 'mr_zipcode')->textInput(['maxlength' => 45]) -> label('ZIPCODE') ?>

    <?= $form->field($model, 'mr_status')->textInput(['maxlength' => 45]) -> label('STATUS') ?>

    <?= $form->field($model, 'mr_mobile')->textInput(['maxlength' => 45]) -> label('MOBILE') ?>

    <?= $form->field($model, 'mr_tel_no')->textInput(['maxlength' => 45]) -> label('TELEPHONE #') ?>

    <?= $form->field($model, 'mr_office_no')->textInput(['maxlength' => 45]) -> label('OFFICE #') ?>

    <?= $form->field($model, 'mr_email_ad')->textInput(['maxlength' => 45]) -> label('EMAIL ADDRESS') ?>

    <?= $form->field($model, 'mr_alter_emal_ad')->textInput(['maxlength' => 45]) -> label('ALTER EMAIL ADDRESS') ?>

    <?= $form->field($model, 'mr_reg_date')->textInput() -> label('REGISTER DATE') ?>

    <?= $form->field($model, 'mr_exp_date')->textInput() -> label('EXPIRY DATE') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
