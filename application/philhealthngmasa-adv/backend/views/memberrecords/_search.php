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

    <?= $form->field($model, 'phid') ?>

    <?= $form->field($model, 'zipcode') ?>

    <?= $form->field($model, 'house_no') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'home') ?>

    <?php // echo $form->field($model, 'office') ?>

    <?php // echo $form->field($model, 'alt_email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'lname') ?>

    <?php // echo $form->field($model, 'fname') ?>

    <?php // echo $form->field($model, 'mname') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'civilstat') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'dependent') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'barangay') ?>

    <?php // echo $form->field($model, 'emailad') ?>

    <?php // echo $form->field($model, 'regdate') ?>

    <?php // echo $form->field($model, 'expdate') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'image_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
