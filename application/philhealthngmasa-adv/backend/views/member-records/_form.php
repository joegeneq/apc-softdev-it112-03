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

    <?php echo $form->field($model, 'mr_civ_stat') -> label('Civil Status')->dropDownList(['Single' => 'Single', 'Married' => 'Married', 
                                                                'Widow(er)' => 'Widow(er)', 'Legally Separated' => 'Legally Separated']); ?>

    <?php echo $form->field($model, 'mr_gender') -> label('GENDER')->dropDownList(['Female' => 'Female', 'Male' => 'Male']); ?>

    <?= $form->field($model, 'mr_dependent')->textInput(['maxlength' => 45]) -> label('DEPENDENT') ?>

    <?= $form->field($model, 'mr_type')->textInput(['maxlength' => 45]) -> label('TYPE') ?>

    <?= $form->field($model, 'mr_house_no')->textInput(['maxlength' => 45]) -> label('HOUSE #') ?>

    <?php echo $form->field($model, 'mr_street') -> label('STREET')->dropDownList(['Malvar' => 'Malvar', 'Macabulos' => 'Macabulos', 'Estrella' => 'Estrella', 
    'Dallas' => 'Dallas', 'Apolinario' => 'Apolinario', 'Lacuña' => 'Lacuña', 'Garcia' => 'Garcia', 'Hizon' => 'Hizon', 'Tinio' => 'Tinio',
    'Mpjica' => 'Mojica', 'Del Pilar' => 'Del Pilar']); ?>

    <?= $form->field($model, 'mr_brarangay') -> label('BARANGAY')->dropDownList(['Barangay Bangkal' => 'Barangay Bangkal']);?>

    <?= $form->field($model, 'mr_city') -> label('CITY')->dropDownList(['Makati City' => 'Makati City']);?>

    <?= $form->field($model, 'mr_zipcode') -> label('ZIPCODE')->dropDownList(['1233' => '1233']);?>

    <?= $form->field($model, 'mr_status') -> label('STATUS')->dropDownList(['New Applicant' => 'New Applicant', 'Renewed' => 'Renewed', ]);?>

    <?= $form->field($model, 'mr_mobile')->textInput(['maxlength' => 45]) -> label('MOBILE') ?>

    <?= $form->field($model, 'mr_tel_no')->textInput(['maxlength' => 45]) -> label('TELEPHONE #') ?>

    <?= $form->field($model, 'mr_office_no')->textInput(['maxlength' => 45]) -> label('OFFICE #') ?>

    <?= $form->field($model, 'mr_email_ad')->textInput(['maxlength' => 45]) -> label('EMAIL ADDRESS') ?>

    <?= $form->field($model, 'mr_alter_emal_ad')->textInput(['maxlength' => 45]) -> label('ALTER EMAIL ADDRESS') ?>

    <?= $form->field($model, 'mr_reg_date') -> label('REGISTER DATE') ->widget(
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

    <?= $form->field($model, 'mr_exp_date') -> label('EXPIRY DATE')->widget(
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
