<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_lname')->textInput(['maxlength' => 45]) -> label('LAST NAME') ?>

    <?= $form->field($model, 'mr_fname')->textInput(['maxlength' => 45]) -> label('FIRST NAME') ?>

    <?= $form->field($model, 'mr_mname')->textInput(['maxlength' => 45]) -> label('MIDDLE NAME') ?>

    <?= $form->field($model, 'mr_bdate')->widget(
         DatePicker::className(), [
        // inline too, not bad
         'inline' => true, 
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?php echo $form->field($model, 'mr_civ_stat')->dropDownList(['Single' => 'Single', 'Married' => 'Married']); ?>

    <?php echo $form->field($model, 'mr_gender')->dropDownList(['Female' => 'Female', 'Male' => 'Male']); ?>

    <?= $form->field($model, 'mr_dependent')->textInput(['maxlength' => 45]) -> label('DEPENDENT') ?>

    <?= $form->field($model, 'mr_type')->textInput(['maxlength' => 45]) -> label('TYPE') ?>

    <?= $form->field($model, 'mr_house_no')->textInput(['maxlength' => 45]) -> label('HOUSE #') ?>

    <?php echo $form->field($model, 'mr_street')->dropDownList(['Street1' => 'Street1', 'Street2' => 'Street2', 'Street3' => 'Street3', 'Street4' => 'Street4',
        'Street5' => 'Street5', 'Street6' => 'Street6']); ?>

    <?= $form->field($model, 'mr_brarangay')->textInput(['maxlength' => 45]) -> label('BARANGAY') ?>

    <?= $form->field($model, 'mr_city')->textInput(['maxlength' => 45]) -> label('CITY') ?>

    <?= $form->field($model, 'mr_zipcode')->textInput(['maxlength' => 45]) -> label('ZIPCODE') ?>

    <?= $form->field($model, 'mr_status')->textInput(['maxlength' => 45]) -> label('STATUS') ?>

    <?= $form->field($model, 'mr_mobile')->textInput(['maxlength' => 45]) -> label('MOBILE') ?>

    <?= $form->field($model, 'mr_tel_no')->textInput(['maxlength' => 45]) -> label('TELEPHONE #') ?>

    <?= $form->field($model, 'mr_office_no')->textInput(['maxlength' => 45]) -> label('OFFICE #') ?>

    <?= $form->field($model, 'mr_email_ad')->textInput(['maxlength' => 45]) -> label('EMAIL ADDRESS') ?>

    <?= $form->field($model, 'mr_alter_emal_ad')->textInput(['maxlength' => 45]) -> label('ALTER EMAIL ADDRESS') ?>

    <?= $form->field($model, 'mr_reg_date') -> label('Register Date') ->widget(
         DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'mr_exp_date') -> label('Expiry Date')->widget(
         DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
