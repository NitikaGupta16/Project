<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Buy Computers, Phones & All Their Accessories - NAVTECH COMPUTER SYSTEMS</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet"> 
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

	
</head>
<body>
	<div class="wrapper" id="wrapper">
		<section id="home" class="header">
				<?php include 'header.php';?>
		</section>
		<section id="about" class="about container-fluid">
			<div class="container-fluid row flexsliderheight" >
				<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img class="home_text animated" src="images/hero_ui.png">
							</li>
							<li>
								<img class="home_text animated" src="images/devices.png">
							</li>
							<li>
								<img class="home_text animated" src="images/hero_ui.png">
							</li>
							<li>
								<img class="home_text animated" src="images/devices.png">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 home_text1">
					<div class="flexslider2">
						<ul class="slides">
							<li>
								<p class="home_text home_text1">DESIGN AGENCY</p>
							</li>
							<li>
								<p class="home_text home_text1">ONLINE PRODUCTS</p>
							</li>
							<li>
								<p class="home_text home_text1">WEB SOLUTIONS</p>
							</li>
						</ul>
					</div>
					<a class="btn btn-lg btn-success download_app " href="#">What We Do</a>
				</div>
			</div>
		</section>
		<section id="carousel-12" class="carousel-12">
			<div class="container-fluid overlay1">
				<div id="owl-1" class="owl-carousel popup-gallery gallery_margin" >
					<div class="owl-item" style="width: 234px;">
						<div class="item material_red ">
							<a href="images/analytics.png">
								<img src="images/analytics.png"  alt="Grab">
								<h3>Fully Responsive</h3>
								<h4>Apps</h4>
							</a>
						</div>

					</div>
					<div class="owl-item" style="width: 234px;">
						<div class="item material_green ">
							<a href="images/analytics-1.png">
								<img src="images/analytics-1.png" alt="Grab">
								<h3>Fully Responsive</h3>
								<h4>Web</h4>
							</a>
						</div>
					</div>
					<div class="owl-item" style="width: 234px;">
						<div class="item material_blue ">
							<a href="images/analytics-2.png">
								<img src="images/analytics-2.png" alt="Grab">
								<h3>Marketing</h3>
								<h4>Can grab this</h4>
							</a>
						</div>
					</div>
					<div class="owl-item" style="width: 234px;">
						<div class="item material_orange ">
							<a href="images/analytics-3.png">
								<img src="images/analytics-4.png" alt="Grab">
								<h3>Creative Thinkers</h3>
								<h4>Focus on Results</h4>
							</a>
						</div>
					</div>
					<div class="owl-item" style="width: 234px;">
						<div class="item material_pink ">
							<a href="images/analytics-5.png">
								<img src="images/analytics-5.png" alt="Grab">
								<h3>Crearting Value</h3>
								<h4>Can Touch This</h4>
							</a>
						</div>
					</div>
					<div class="owl-item" style="width: 234px;">
						<div class="item material_grey ">
							<a href="images/analytics-6.png">
								<img src="images/analytics-6.png" alt="Grab">
								<h3>Right People</h3>
								<h4>Can grab this</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="contact">
			<div class="container overlay2">
				<h1 class="contact_heading">
					Send Feedback. Contact Us .<br>
					Drop us a message, we'd love to hear from you.
				</h1>
				<form id="contact_form" class="form-horizontal form_edit" name="my_form"   action="ajax.php" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name"  id="name" aria-describedby="email" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" name="email"  id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone"  id="phone" placeholder="Phone Number">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" name="message" id="message"  rows="5" placeholder="Message"></textarea>
					</div>
					<button id="contact_submit" type="submit" name="submit" class="btn btn-primary button_edit submit">Send Message</button>
				</form>
			</div>
			<a href="#" class="to_home"></a>
		</section>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/project.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
</body>
</html>
