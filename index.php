<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	include_once ('session.php');

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Postavi.si</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Konnect Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!-- webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<!-- webfonts -->
	<!-- dropdown -->
	<script src="js/jquery.easydropdown.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="css/popup.css" rel="stylesheet" type="text/css">
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div class="container">
				<div class="col-sm-6 header-top-left">
					<div class="box">

					</div>
					<div class="box1">

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-sm-6 header-top-right">
					<div class="col-xs-7 phone"><p></p></div>
					<div class="col-xs-5 check_box">
						<a href="#"> <ul class="check">
							<i class="cart"> </i>
							<li class="cart_desc">Košarica</li>
							<div class="clearfix"> </div>
						</ul></a>
					</div>
					<div class="clearfix"></div>	
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container">
			<div class="header_bottom"> 
				<div class="col-xs-3 logo">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="col-xs-9 header_nav">
					<div class="col-xs-9 menu">
						<a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
						<ul class="nav" id="nav">
							<li class="current"><a href="index.php">Domov</a></li>
							<li><a href="about.php">Zakaj Postavi.si</a></li>
							<li><a href="services.php">Ponujeno</a></li>								
						</ul>
						<script type="text/javascript" src="js/responsive-nav.js"></script>
					</div>
					<div class="col-xs-3 header_but">
						<menu class="cl-effect-8" id="cl-effect-8">
							<?php if(isset($_SESSION['id'])): ?>
								<p>Pozdravljen <?php echo $_SESSION['name']; ?></p>
								<a href="logout.php">Izpis</a>
						<?php else: ?>
								<a href="login.php">Vpis</a>

							<a href="registration.php">Registracija</a>

						<?php endif; ?>
						</menu>	
					</div>
					<div class="clearfix"></div>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header_bot_grid">
			<h1>Postavi si strežnik na POSTAVI.SI</h1>
			<div class="header-btns">
				<a class="plans btn btn-primary1 btn-normal btn-inline" href="plans.php">Ogled Paketov</a>

			</div>
			<span> </span>
		</div>
	</div>
	<div class="content_top">
		<div class="container">
			<div class="col-md-3 grid_1">
				<i class="time"> </i>
				<h3>99.99% Uptime</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
			</div>
			<div class="col-md-3 grid_1">
				<i class="platform"> </i>
				<h3>Multi-Platform</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
			</div>
			<div class="col-md-3 grid_1">
				<i class="fast"> </i>
				<h3>Amazingly Fast</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
			</div>
			<div class="col-md-3 grid_1">
				<i class="data"> </i>
				<h3>Data Recovery</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
			</div>
		</div>
	</div>
	<div class="content_bottom">
		<div class="container">
			<div class="box3">
				<h2>Simple Pricing . Always .</h2>
				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="plans">
				<div class="col-md-3">
					<div class="pricing-table-grid">
						<div class="plans_head">
							<h3>Personal</h3>
							<h4 class="m_4"><small class="m_2">$</small>10<small small class="m_3">/mo</small></h4>
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
						</div>
						<ul>
							<li><a href="#">20GB Disk Space</a></li>
							<li><a href="#">20GB Monthly Bandwidth</a></li>
							<li><a href="#">Unlimited Users</a></li>
							<li><a href="#">100 Domains</a></li>
							<li><a href="#">430 Email Accounts</a></li>
							<li><a href="#">Automatic Cloud Backups</a></li>
						</ul>
						<a class="popup-with-zoom-anim button" href="#small-dialog">Order Now</a>
						<div id="small-dialog" class="mfp-hide">
							<div class="pop_up">
								<div class="payment-online-form-left">
									<form>
										<h4><span class="shipping"> </span>Shipping</h4>
										<ul>
											<li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
											<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
										</ul>
										<ul>
											<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
											<li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
										</ul>
										<ul>
											<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
											<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
											<div class="clearfix"> </div>
										</ul>
										<div class="clear"> </div>
										<ul class="payment-type">
											<h4><span class="payment"> </span> Payments</h4>
											<li>
												<span class="col_checkbox">
													<input id="3" class="css-checkbox1" type="checkbox">
													<label for="3" name="demo_lbl_1" class="css-label1"> </label>
													<a class="visa" href="#"> </a>
												</span>
											</li>
											<li>
												<span class="col_checkbox">
													<input id="4" class="css-checkbox2" type="checkbox">
													<label for="4" name="demo_lbl_2" class="css-label2"> </label>
													<a class="paypal" href="#"> </a>
												</span>
											</li>
											<div class="clearfix"> </div>
										</ul>
										<ul>
											<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
											<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
											<div class="clearfix"> </div>
										</ul>
										<ul>
											<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
											<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
											<div class="clearfix"> </div>
										</ul>
										<ul class="payment-sendbtns">
											<li><input type="reset" value="Cancel"></li>
											<li><input type="submit" value="Process order"></li>
										</ul>
										<div class="clearfix"> </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing-table-grid">
						<div class="plans_head1">
							<h3>Professional</h3>
							<h4 class="m_4"><small class="m_2">$</small>24<small small class="m_3">/mo</small></h4>
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
						</div>
						<ul>
							<li><a href="#">20GB Disk Space</a></li>
							<li><a href="#">20GB Monthly Bandwidth</a></li>
							<li><a href="#">Unlimited Users</a></li>
							<li><a href="#">100 Domains</a></li>
							<li><a href="#">430 Email Accounts</a></li>
							<li><a href="#">Automatic Cloud Backups</a></li>
						</ul>
						<a class="popup-with-zoom-anim button1" href="#small-dialog">Order Now</a>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="pricing-table-grid">
						<div class="plans_head">
							<h3>Business</h3>
							<h4 class="m_4"><small class="m_2">$</small>99<small small class="m_3">/mo</small></h4>
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
						</div>
						<ul>
							<li><a href="#">20GB Disk Space</a></li>
							<li><a href="#">20GB Monthly Bandwidth</a></li>
							<li><a href="#">Unlimited Users</a></li>
							<li><a href="#">100 Domains</a></li>
							<li><a href="#">430 Email Accounts</a></li>
							<li><a href="#">Automatic Cloud Backups</a></li>
						</ul>
						<a class="popup-with-zoom-anim button" href="#small-dialog">Order Now</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing-table-grid1">
						<p>Looking for something simple to get started ?</p>		
						<h5>Starter</h5>

						<h4 class="m_4 m_5"><small class="m_2 sm1">$</small>0<small small class="m_3 sm2">/mo</small></h4>
						<a class="popup-with-zoom-anim button" href="#small-dialog">Get Start Today</a>		   
					</div>
				</div>	
				<div class="clearfix"> </div>								
			</div>
			<div class="plans_desc">
				<h3>Want some Customize Plan for your need ?</h3>
				<a class="contact_btn" href="#">KONTAKT</a>
			</div>
		</div>
	</div>

	<div class="services">
		<div class="container">
			<div class="span_1">
				<h3>Services Offered</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
			</div>
			<div class="span_2">
				<div class="span_2-top">
					<div class="col-md-4">
						<ul class="hosting">
							<i class="icon1"> </i>
							<li class="host_desc">
								<h4>Web Hosting</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
								<a class="button2" href="#">Learn More</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="hosting">
							<i class="icon2"> </i>
							<li class="host_desc">
								<h4>Domain Names</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
								<a class="button2" href="#">Learn More</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="hosting">
							<i class="icon3"> </i>
							<li class="host_desc">
								<h4>File Exchange FTP</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
								<a class="button2" href="#">Learn More</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="span_2-bottom">
					<div class="col-md-4">
						<ul class="hosting">
							<i class="icon4"> </i>
							<li class="host_desc">
								<h4>Dedicated Server</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
								<a class="button2" href="#">Learn More</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="hosting">
							<i class="icon5"> </i>
							<li class="host_desc">
								<h4>Vps Server</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
								<a class="button2" href="#">Learn More</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="hosting">
							<i class="icon6"> </i>
							<li class="host_desc">
								<h4>SSL Certificates</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
								<a class="button2" href="#">Learn More</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>  
	<div class="about_grid">
		<div class="container">
			<div class="span_1 span_3">
				<h4>About Us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
			</div>
			<div class="span_5">
				<div class="col-md-5 span_5-left">
					<p class="m_1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown print.</p>
					<p class="m_2"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
					<a class="button3" href="#">Learn More</a>
				</div>
				<div class="col-md-7">
					<div class="span_5-right">
						<span> </span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="testimonail">
		<div class="container">
			<ul class="test">
				<li class="test_img"><img src="images/test_pic.png" class="img-responsive" alt=""/></li>
				<li class="test_desc">
					<p><span class="quotes"> </span>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. - <span class="link"><a href="#">magna aliqua (CEO)</a></span></p>
				</li>
				<div class="clearfix"> </div>
			</ul>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
	</div>
	<div class="contact_index">
		<div class="container">
			<div class="col-md-8 contact_index-left">
				<h3>Pošlji nam sporočilo</h3>
				<div class="contact-form">
					<form>
						<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Sporočilo</textarea>
						<input type="submit" value="Pošlji">
					</form>
				</div>
			</div>
			<div class="col-md-4 contact_index-right">
				<h3>Hitre Povezave</h3>
				<ul class="footer_social">
					<li><a href="#"> <i class="email"> </i> </a></li>
					<li><a href="#"> <i class="chat"> </i> </a></li>
					<li><a href="#"> <i class="report"> </i></a></li>
					<li><a href="#"> <i class="phone"> </i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
</body>
</html>

