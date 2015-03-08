<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<title>Brgy. Bangkal PhilHealth ng Masa</title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	
	<?= Html::cssFile('@web/css/style.css') ?>
    <?= Html::cssFile('@web/css/responsiveslides.css') ?>
		
	
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            
             NavBar::begin([				 
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
			echo "<img src='images/headertext.png'>";
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>
			<div class="clear"> </div>
		<?= $content ?>
    </div>
	

<!---start-footer---->
		<footer class="footer">
			<center><p>Copyrights © 2015 Brgy. Bangkal PhilHealth ng Masa | IT112</p></center>
		</footer>
<!---End-footer---->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
