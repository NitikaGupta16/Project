<!DOCTYPE html>
<?php  

session_start();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <meta name="description" content="">
    <meta name="author" content="">
	<title>99 Fusion - Admin Login</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet"> 
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	
</head>
<body>
	<div class="wrapper1" id="wrapper">
		<section id="home" class="header">
			<div class="container-fluid overlay3">
				<?php include 'header_admin.php';?>
			</div>
		</section>
	</div>
<?php
	if(!isset($_SESSION['admin']))
	{
?>
		<section id="contact" class="contact">
			<div class="container overlay2">
			<h1>
				Admin Login
			</h1>
				<form class="form-horizontal form_edit" name="admin_form" id="admin_form" action="ajax_admin.php" method="post">
					<div class="form-group">
						<label for="name">User Name</label>
						<input type="text" class="form-control" name="name"  id="name" placeholder="Enter User Name">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password"  id="password" placeholder="Password">
					</div>
					<button type="submit" name="submit" id="submit" class="btn btn-primary button_edit submit">Login</button>
				</form>
			</div>
		</section>
	<?php
	}
	else
	{
	?>
		<section class="messages ">
			<div class="container overlay3 ">
				<div class="messages">
				<h1><?php echo "Welcome Admin : ".ucfirst($_SESSION['admin']);?>
				</h1>
				<h1>Messages Sent By Users</h1>
				</div>
			</div>
		</section>
		<section id="message_bubble" class="message_bubble " >
			<div class="container-fluid overlay1">
				<div class="row">
					<div class="col-md-1  col-xs-1 col-sm-1"></div>
					<div class="col-md-10 col-xs-12 col-sm-10">
						<div class="container  message_bubble">
							<div class="row">
								<div class"message_bubble2">
									<a href="#popup_messages" class="popup_messages">
									<?php
										require_once("dbconstant.php");
										$mysqli = new mysqli(address, user, pass, db);
										if ($mysqli->connect_errno) 
										{
											echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
											mysqli_close($mysqli);
											
										}
										else
										{
											$sql = "select * from contact_us";
											$run=mysqli_query($mysqli,$sql);
											while($row=mysqli_fetch_array($run))  
											{   
												$name=$row[1];
												$email=$row[2];
												$phone=$row[3];
												$message=$row[4];
												?> 
												<!--<div id="popup_messages" class="popup_messages">
													<a href="#popup_messages" class="popup_messages_button"> </a></div>-->
													
														<div class="col-md-4 col-xs-11 col-sm-6 bubble ">
															<div class="padding_bubble">
															<p><?php echo "Name : ".$name?></p>
															<p><?php echo "Email : <a href='mailto:$email'>$email</a>"?></p>
															<p><?php echo "Phone Number : <a href='tel:$phone'>$phone</a>" ?></p>
															<p><?php echo "Message : $message"?></p>
															
														</div>
														</div>
												<?php
											}
											mysqli_close($mysqli);
										}
								
								?>	</a>		
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-1  col-xs-1 col-sm-1"></div>
				</div>
			</div>
		</section>
	<?php
	}
	?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/project.js"></script>
	</body>
</html>
