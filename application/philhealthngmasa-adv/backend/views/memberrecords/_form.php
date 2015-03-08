<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberRecords */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phid')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'zipcode')->textInput() ?>

    <?= $form->field($model, 'house_no')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'home')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'office')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'alt_email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'civilstat')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'dependent')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'barangay')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'emailad')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'regdate')->textInput() ?>

    <?= $form->field($model, 'expdate')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image_url')->textInput(['maxlength' => 250]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
