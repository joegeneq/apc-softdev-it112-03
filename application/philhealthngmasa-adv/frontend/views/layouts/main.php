<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
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
    <div class="wrap">
        <?php
            echo "<img src='images/headertext.png'>";
             NavBar::begin([                             
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
                        echo "<img src='images/headertext.png'>";
            
            NavBar::end();
        ?>
    </div>
        

        
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