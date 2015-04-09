<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\EventList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'el_date')->widget(
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

    <?= $form->field($model, 'el_event')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'el_venue')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mr_id')->textInput() ?>

    <?= $form->field($model, 'ev_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
