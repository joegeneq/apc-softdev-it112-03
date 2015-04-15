<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\MemberRecords;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Dependents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependents-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'relationship') ->dropDownList(['' => '--Select--', 'Mother' => 'Mother', 'Father' => 'Father',
    	'Children' => 'Children', 'Husband' => 'Husband', 'Wife' => 'Wife']); ?>


    <?php
        $member_records=memberrecords::find()->all();
        $listData=ArrayHelper::map($member_records,'mr_id','mr_id');
        echo $form->field($model, 'member_records_mr_id')->dropDownList(
                                $listData,
                               ['prompt'=>'Select Member ID...']);
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
