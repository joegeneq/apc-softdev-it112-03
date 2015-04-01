<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EventListSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'el_ctrlno') ?>

    <?= $form->field($model, 'el_date') ?>

    <?= $form->field($model, 'el_event') ?>

    <?= $form->field($model, 'el_venue') ?>

    <?= $form->field($model, 'mr_id') ?>

    <?php // echo $form->field($model, 'ev_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
