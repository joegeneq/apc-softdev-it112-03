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
						<li><a href="index.html">HOME</a></li>
                		<li><a href="./index.php?r=site%2Fabout">ABOUT US</a></li>
                		<li class="active"><a href="./index.php?r=site%2Fsearchmember">SEARCH MEMBER</a></li>
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
				<!---start-services---->
				<div class="services">
					<div class="wrap">
					  <div class="services-header">
						<h3>Services</h3>
					 </div>
					   <div class="section group group">
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/res.png">
								</div>
							    <div class="text list_2_of_1">
									<h3><span>Travel</span> Resources</h3>
									<h4>Sed ut perspiciatis undeaccusantium .</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
									 <a class="button" href="#">Learn More</a>
							   </div>
						   </div>			
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/guid.png">
								</div>
								<div class="text list_2_of_1">
									  <h3><span>Access</span> Guides</h3>
									  <h4>Sed ut perspiciatis undeaccusantium .</h4>
									 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
									  <a class="button" href="#">Learn More</a>
								</div>
							</div>
						</div>
						<div class="section group">
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/air.png">
								</div>
							    <div class="text list_2_of_1 ">
									<h3><span>Airline</span> Travels</h3>
									<h4>Sed ut perspiciatis undeaccusantium .</h4>
									   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
									 <a class="button" href="#">Learn More</a>
							   </div>
						   </div>			
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/compin.png">
								</div>
								<div class="text list_2_of_1">
									  <h3><span>Travel </span>Companions</h3>
									  <h4>Sed ut perspiciatis undeaccusantium .</h4>
									    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
									  <a class="button" href="#">Learn More</a>
								</div>
							</div>
						</div>
				  </div>
				</div>
				<!---End-services---->
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
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				<div class="footer-grid">
					<h3>EXTRAS</h3>
					<p>Ut rutrum neque a mollis laoreet diam enim feuiat dui nec ulacoper quam felis id diam. Nunc ut tortor ligula eu petiu risus. Pelleesque conquat dignissim lacus quis altrcies.</p>
				</div>
				<div class="footer-grid">
					<h3>RECENT POSTS</h3>
					<ul>
						<li><a href="#">Vestibulum felis</a></li>
						<li><a href="#">Mauris at tellus</a></li>
						<li><a href="#">Donec ut lectus</a></li>
						<li><a href="#">vitae interdum</a></li>
					</ul>
				</div>
				<div class="footer-grid">
					<h3>USEFUL INFO</h3>
					<ul>
						<li><a href="#">Hendrerit quam</a></li>
						<li><a href="#">Amet consectetur </a></li>
						<li><a href="#">Iquam hendrerit</a></li>
						<li><a href="#">Donec ut lectus </a></li>
					</ul>
				</div>
				<div class="footer-grid footer-lastgrid">
					<h3>CONTACT US</h3>
					<p>Pelleesque conquat dignissim lacus quis altrcies.</p>
					<div class="footer-grid-address">
						<p>Tel.800-255-9999</p>
						<p>Fax: 1234 568</p>
						<p>Email:<a class="email-link" href="#">info(at)yourcompany.com</a></p>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
		</div>