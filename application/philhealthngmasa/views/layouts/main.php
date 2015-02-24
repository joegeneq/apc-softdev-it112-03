<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<head>
	<title>Brgy. Bangkal PhilHealth ng Masa</title>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	
	<?= Html::cssFile('@web/css/style.css') ?>
    <?= Html::cssFile('@web/css/responsiveslides.css') ?>
	
	
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

		<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="index.html"><img src="images/headertext.png" title="logo" /></a>
				</div>
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">PHILHEALTH NG MASA</a></li>
						<li><a href="services.html">SEARCH MEMBER</a></li>
						<li><a href="plans.html">EVENTS</a></li>
						<li><a href="contact.html">LOG IN</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
			<!---End-header---->


            <?= $content ?>

			
 
		<!---start-footer---->
		<footer class="copy-right">
			<p>Copyrights © 2015 Brgy. Bangkal PhilHealth ng Masa | IT112</p>
		</footer>
		<!---End-footer---->
 


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
