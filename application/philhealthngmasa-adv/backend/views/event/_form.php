<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ev_title')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ev_date')->textInput() ?>

    <?= $form->field($model, 'ev_location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ev_desc')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'ev_content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
