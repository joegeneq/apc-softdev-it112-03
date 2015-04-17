<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecordsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-records-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mr_id') ?>

    <?= $form->field($model, 'mr_lname') ?>

    <?= $form->field($model, 'mr_fname') ?>

    <?= $form->field($model, 'mr_mname') ?>

    <?= $form->field($model, 'mr_bdate') ?>

    <?php // echo $form->field($model, 'mr_civ_stat') ?>

    <?php // echo $form->field($model, 'mr_gender') ?>

    <?php // echo $form->field($model, 'mr_type') ?>

    <?php // echo $form->field($model, 'mr_house_no') ?>

    <?php // echo $form->field($model, 'mr_street') ?>

    <?php // echo $form->field($model, 'mr_brarangay') ?>

    <?php // echo $form->field($model, 'mr_city') ?>

    <?php // echo $form->field($model, 'mr_zipcode') ?>

    <?php // echo $form->field($model, 'mr_status') ?>

    <?php // echo $form->field($model, 'mr_mobile') ?>

    <?php // echo $form->field($model, 'mr_tel_no') ?>

    <?php // echo $form->field($model, 'mr_office_no') ?>

    <?php // echo $form->field($model, 'mr_email_ad') ?>

    <?php // echo $form->field($model, 'mr_alter_emal_ad') ?>

    <?php // echo $form->field($model, 'mr_reg_date') ?>

    <?php // echo $form->field($model, 'mr_exp_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
