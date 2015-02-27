<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


		<div class="header">
				<div class="wrap">
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.html">HOME</a></li>
						<li><a href="./index.php?r=site%2Fabout">ABOUT US</a></li>
						<li><a href="./index.php?r=site%2Fcontact">PHILHEALTH NG MASA</a></li>
						<li><a href="./index.php?r=site%2Fabout">SEARCH MEMBER</a></li>
						<li><a href="./index.php?r=site%2Fcontact">EVENTS</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ])->checkbox() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
