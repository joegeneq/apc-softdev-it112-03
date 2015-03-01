<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Myaddress;

/* @var $this yii\web\View */
/* @var $model app\models\MyComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="my-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'myaddress_id')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>
	
	<?php
		$myaddress=myaddress::find()->all();
	
		$listData=ArrayHelper::map($myaddress,'id','lastname');
		
		echo $form->field($model, 'myaddress_id')->dropDownList(
			$listData,
			['prompt'=>'--Select--']);
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
