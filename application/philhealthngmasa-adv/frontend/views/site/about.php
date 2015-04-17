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
                		<li class="active"><a href="./index.php?r=site%2Fabout">ABOUT US</a></li>
                		<li><a href="./index.php?r=member-records">SEARCH MEMBER</a></li>
                		<li><a href="./index.php?r=site%2Fabout">EVENTS</a></li>
                		<li><a href="./index.php?r=site%2Fcontact">CONTACT</a></li>
            </ul>
        </div>
    <div class="clear"> </div>
    </div>
</div>
        <!---End-wrap---->
    <div class="clear"> </div>
        <!---start-content---->
    <div class="content">

		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>About us</h3>
					 </div>
					<div class="about-info">
						<p align="justify">In the 1990s, a vision for a better, more responsive government health care program was prompted by the passage of several bills that had significant implications on health financing. The public's clamor for a health insurance that is more comprehensive in terms of covered population led to the development of House Bill 14225 which became The National Health Insurance Act of 1995 or Republic Act 7875, signed by President Fidel V. Ramos on February 14, 1995. The law paved the way for the creation of the Philippine Health Insurance Corporation (PhilHealth), mandated to provide social health insurance coverage to all Filipinos.
							Through PhilHealth, the local government of Makati joined together with their sponsored program called "PhilHealth ng Masa" that is open to qualified indigents belonging to the lowest 25% of the Philippine population. This program aims to help the less privilege families to be part of PhilHealth which definitely ensures everyone’s future when it comes to health services. A PhilHealth ng Masa Member doesn't pay any PhilHealth premiums since these are being subsidized by the National Government through PhilHealth and a Sponsor such as the Makati Government that will jointly pay the annual premium for each enrolled family.
							Each PhilHealth ng Masa Beneficiaries have access to a nearly comprehensive package of services, including inpatient care, catastrophic coverage, ambulatory surgeries, deliveries, and outpatient treatment for malaria and tuberculosis.</p>
					</div>
				</div>
			</div>
			    <div class="specials">
			    	<div class="wrap">
					  <div class="specials-heading">
						<h3>Latest-News</h3>
					</div>
					<div class="specials-grids">
						<div class="special-grid">
							<img src="images/grids-img1.jpg" title="image-name" />
							<a href="#">Latest Plans</a>
							<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
						</div>
						<div class="special-grid">
							<img src="images/grids-img2.jpg" title="image-name" />
							<a href="#">Pre Plans</a>
							<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
						</div>
						<div class="special-grid spe-grid">
							<img src="images/grids-img3.jpg" title="image-name" />
							<a href="#">Free Plans</a>
							<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
						</div>
						<div class="clear"> </div>
					</div>
			  </div>
			</div>	
		</div>
		<!---End-content---->
		<div class="clear"> </div>




    

