<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\assets\JqueryFiles;

// Site::register($this);

// Coming Soon Page

?>

<div id="social" class="visible-lg" xmlns="http://www.w3.org/1999/html">
	<ul class="social-icons pull-right hidden-xs">
		<li style="margin: 7px; color: aliceblue;">Follow us on:</li>
		<li class="social-rss">
			<a href="https://www.linkedin.com/in/milivoje-ivic-b60a04115/" target="_blank" title="RSS"></a>
		</li>
		<li class="social-twitter">
			<a href="https://twitter.com/milivojeivic422" target="_blank" title="Twitter"></a>
		</li>
		<li class="social-facebook">
			<a href="https://www.facebook.com/Mili422" target="_blank" title="Facebook"></a>
		</li>
		<li class="social-googleplus">
			<a href="https://plus.google.com/103756269355951216143" target="_blank" title="GooglePlus"></a>
		</li>
	</ul>
</div>
<!-- Header -->
<div id="header" style="background-position: 50% 0%; height:100%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<!-- Logo -->
			<div class="logo">
				<a href="#" title="">
					<?= Html::img('/AppImages/logo.png', ['alt'=>'Logo', 'class'=>'thing']);?>
				</a>
			</div>
			<!-- End Logo -->
			<!-- Main Menu -->
		</div>
		<!-- Top Menu -->
		<div id="" class="row text-light">
			<div class="col-md-12">
				<div class="text-center hidden-lg hidden-sm hidden-md hidden-xs">
					<ul id="hornavmenu" class="nav navbar-nav">

						<li>
							<a href="index.html" class="fa-home active animate fadeInLeft">Home</a>
						</li>
						<li>
							<span class="fa-gears ">Features</span>
							<ul>
								<li class="parent">
									<span>Typography</span>
									<ul>
										<li>
											<a href="features-typo-basic.html">Basic Typography</a>
										</li>
										<li>
											<a href="features-typo-blockquotes.html">Blockquotes</a>
										</li>
									</ul>
								</li>
								<li class="parent">
									<span>Components</span>
									<ul>
										<li>
											<a href="features-labels.html">Labels</a>
										</li>
										<li>
											<a href="features-progress-bars.html">Progress Bars</a>
										</li>
										<li>
											<a href="features-panels.html">Panels</a>
										</li>
										<li>
											<a href="features-pagination.html">Pagination</a>
										</li>
									</ul>
								</li>
								<li class="parent">
									<span>Icons</span>
									<ul>
										<li>
											<a href="features-icons.html">Icons General</a>
										</li>
										<li>
											<a href="features-icons-social.html">Social Icons</a>
										</li>
										<li>
											<a href="features-icons-font-awesome.html">Font Awesome</a>
										</li>
										<li>
											<a href="features-icons-glyphicons.html">Glyphicons</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="features-testimonials.html">Testimonials</a>
								</li>
								<li>
									<a href="features-accordions-tabs.html">Accordions & Tabs</a>
								</li>
								<li>
									<a href="features-buttons.html">Buttons</a>
								</li>
								<li>
									<a href="features-carousels.html">Carousels</a>
								</li>
								<li>
									<a href="features-grid.html">Grid System</a>
								</li>
								<li>
									<a href="features-animate-on-scroll.html">Animate On Scroll</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="fa-copy ">Pages</span>
							<ul>
								<li>
									<a href="pages-about-us.html">About Us</a>
								</li>
								<li>
									<a href="pages-services.html">Services</a>
								</li>
								<li>
									<a href="pages-faq.html">F.A.Q.</a>
								</li>
								<li>
									<a href="pages-about-me.html">About Me</a>
								</li>
								<li>
									<a href="pages-full-width.html">Full Width</a>
								</li>
								<li>
									<a href="pages-left-sidebar.html">Left Sidebar</a>
								</li>
								<li>
									<a href="pages-right-sidebar.html">Right Sidebar</a>
								</li>
								<li>
									<a href="pages-login.html">Login</a>
								</li>
								<li>
									<a href="pages-sign-up.html">Sign-Up</a>
								</li>
								<li>
									<a href="pages-404.html">404 Error Page</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="fa-th ">Portfolio</span>
							<ul>
								<li>
									<a href="portfolio-2-column.html">2 Column</a>
								</li>
								<li>
									<a href="portfolio-3-column.html">3 Column</a>
								</li>
								<li>
									<a href="portfolio-4-column.html">4 Column</a>
								</li>
								<li>
									<a href="portfolio-6-column.html">6 Column</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="fa-font ">Blog</span>
							<ul>
								<li>
									<a href="blog-list.html">Blog</a>
								</li>
								<li>
									<a href="blog-single.html">Blog Single Item</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="contact.html" class="fa-comment ">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Top Menu -->
	</div>
</div>
<!-- End Header -->
<!-- === END HEADER === -->
<!-- === BEGIN CONTENT === -->
<div id="welcome" class="background-white">
	<div class="container">
		<div class="row margin-vert-40">
			<!-- Main Text -->
			<div class="col-md-12">
				<h2 class="text-center article-title">Welcome to Boss</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
					nisl ut aliquip ex ea commodo consequat.</p>
				<img class="fadeInUp animate" alt="" src="assets/img/responsive_homepage.jpg" style="display: block; margin-left: auto; margin-right: auto; margin-top: 40px;">
			</div>
			<!-- End Main Text -->
		</div>
	</div>
</div>
<!-- Icons -->
<div id="icons" class="parallax-bg1 text-light background-primary" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row margin-vert-40">
			<!-- Icons -->
			<div class="col-md-4 text-center animate fadeInLeft">
				<i class="fa-crosshairs fa-3x color-primary-lighter"></i>
				<h2 class="padding-top-10">Innovate</h2>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
			</div>
			<div class="col-md-4 text-center animate fadeIn">
				<i class="fa-puzzle-piece fa-3x color-primary-lighter"></i>
				<h2 class="padding-top-10">Enlighten</h2>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
			</div>
			<div class="col-md-4 text-center animate fadeInRight">
				<i class="fa-music fa-3x color-primary-lighter"></i>
				<h2 class="padding-top-10">Inspire</h2>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
			</div>
			<!-- End Icons -->
		</div>
	</div>
</div>
<!-- End Icons -->
<!-- Content -->
<div id="content" class="background-white">
	<div class="container">
		<div class="row margin-vert-40">
			<div class="col-md-12">
				<h2 class="text-center article-title">Lorem ipsum dolor</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut
					porttitor nisl dapibus eu.</p>
				<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor
					fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
				<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt
					rhoncus urna eget placerat.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Content -->
<!-- Portfolio -->
<div id="porfolio" class="parallax-bg2" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row margin-top-40">
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInLeft">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Velit esse molestie</div>
							</div>
							<img alt="image1" src="assets/img/frontpage/image1.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInUp">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Quam nunc putamus</div>
							</div>
							<img alt="image2" src="assets/img/frontpage/image2.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInRight">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Placerat facer possim</div>
							</div>
							<img alt="image3" src="assets/img/frontpage/image3.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInLeft">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Nam liber tempor</div>
							</div>
							<img alt="image4" src="assets/img/frontpage/image4.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInUp">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Donec non urna</div>
							</div>
							<img alt="image5" src="assets/img/frontpage/image5.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInRight">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Nullam consectetur</div>
							</div>
							<img alt="image6" src="assets/img/frontpage/image6.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInLeft">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Velit esse molestie</div>
							</div>
							<img alt="image7" src="assets/img/frontpage/image7.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInUp">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Quam nunc putamus</div>
							</div>
							<img alt="image8" src="assets/img/frontpage/image8.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInRight">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Placerat facer possim</div>
							</div>
							<img alt="image9" src="assets/img/frontpage/image9.jpg">
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
		</div>
	</div>
</div>
<!-- End Portfolio -->
<!-- Hiring -->
<div id="hiring" class="parallax-bg3 text-light" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin-vert-40">
				<h2 class="animate fadeIn" style="text-align: center;">We are Hiring!</h2>
				<hr>
				<p class="animate fadeIn" style="text-align: center;">Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo.
					<br>Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
				<p class="animate fadeInUp" style="text-align: center;">
					<button class="btn btn-lg btn-primary" type="button">View Details</button>
				</p>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- End Hiring -->
<!-- === END CONTENT === -->
<!-- === BEGIN FOOTER === -->
<div id="base" class="background-dark text-light">
	<div class="container padding-vert-30">
		<div class="row">
			<!-- Disclaimer -->
			<div class="col-md-6 margin-bottom-30">
				<h3 class="margin-bottom-10">Disclaimer</h3>
				<p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
				<p>Dribbble images are property of their respective owners. All other images are freely available from
					<a class="nobold" href="http://www.unsplash.com/" target="_blank">Unsplash</a>.</p>
			</div>
			<!-- End Disclaimer -->
			<!-- Image Credits -->
			<div class="col-sm-6 col-md-3 margin-bottom-30">
				<h3 class="margin-bottom-10">Image Credits</h3>
				<ul class="menu">
					<li>
						<a href="http://www.coffeeandplaid.com/" target="_blank">Coffee & Plaid</a>
					</li>
					<li>
						<a href="https://dribbble.com/OMFGdesign" target="_blank">Olly Freeman</a>
					</li>
					<li>
						<a href="https://dribbble.com/artnok" target="_blank">Niko Picard</a>
					</li>
					<li>
						<a href="https://dribbble.com/forsuregraphic" target="_blank">Forsuregraphic</a>
					</li>
					<li>
						<a href="https://www.unsplash.com" target="_blank">Unsplash</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- End Image Credits -->
			<!-- Friends -->
			<div class="col-sm-6 col-md-3 margin-bottom-30">
				<h3 class="margin-bottom-10">Friends</h3>
				<ul class="menu">
					<li>
						<a href="#">Amanda Allen</a>
					</li>
					<li>
						<a href="#">John Adams</a>
					</li>
					<li>
						<a href="#">Mark Sanchez</a>
					</li>
					<li>
						<a href="#">Diane Reed</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- End Friends -->
		</div>
	</div>
</div>
<!-- Footer -->
<div id="footer" class="background-dark text-light">
	<div class="container no-padding">
		<div class="row">
			<!-- Footer Menu -->
			<div id="footermenu" class="col-md-6">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="https://www.facebook.com/Mili422" target="_blank">Sample Link</a>
					</li>
					<li>
						<a href="#" target="_blank">Sample Link</a>
					</li>
					<li>
						<a href="#" target="_blank">Sample Link</a>
					</li>
					<li>
						<a href="#" target="_blank">Sample Link</a>
					</li>
				</ul>
			</div>
			<!-- End Footer Menu -->
			<!-- Copyright -->
			<div id="copyright" class="col-md-6">
				<p class="pull-right"> <?= date("Y") ?> Powered by <?= Yii::$app->params['app_name'];?> | Design by <?= Yii::$app->params['founder'];?></p>
			</div>
			<!-- End Copyright -->
		</div>
	</div>
