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
	
        <?php
			echo "<img src='images/headertext.png'>";
             NavBar::begin([				 
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
			echo "<img src='images/headertext.png'>";
            echo Nav::widget([			
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
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
