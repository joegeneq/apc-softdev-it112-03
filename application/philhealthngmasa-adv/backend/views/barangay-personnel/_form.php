<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BarangayPersonnel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-personnel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'per_datehired')->textInput() ?>

    <?= $form->field($model, 'member_records_mr_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
