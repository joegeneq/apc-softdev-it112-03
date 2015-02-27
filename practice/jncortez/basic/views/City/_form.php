<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\province;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city_code')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'city_description')->textInput(['maxlength' => 32]) ?>

	<?php
		//use app\models\province;
		$province=province::find()->all();
		
		//use yii\helpers\ArrayHelper;
		$listData=ArrayHelper::map($province,'id','province_code');
	
		echo $form->field($model, 'province_id')->dropDownList(
			$listData,
			['prompt'=>'--Select--']);
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
