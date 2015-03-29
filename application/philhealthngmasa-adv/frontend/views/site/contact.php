<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="header">
    <div class="wrap">
        <div class="top-nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="./index.php?r=site%2Fabout">ABOUT US</a></li>
                <li><a href="./index.php?r=site%2Fabout">EVENTS</a></li>
                <li class="active"><a href="./index.php?r=site%2Fcontact">CONTACT</a></li>
            </ul>
        </div>
    <div class="clear"> </div>
    </div>
</div>
        <!---End-wrap---->
    <div class="clear"> </div>
        <!---start-content---->
    <div class="content">

<div class="section group">             
    <div class="col span_1_of_3">
        <div class="contact_info">
            <h3>Find Us Here</h3>
                <div class="map">
                    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>
                </div>
        </div>
        <div class="company_address">
            <h3>Company Information :</h3>
             <p>500 Lorem Ipsum Dolor Sit,</p>
             <p>22-56-2-9 Sit Amet, Lorem,</p>
             <p>USA</p>
             <p>Phone:(00) 222 666 444</p>
             <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <span>info(at)mycompany.com</span></p>
             <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
         </div>
    </div>      

    <div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

</div>
