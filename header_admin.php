<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headd" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="navbar-header">
			<div class="logo">99Fusion</div>
		</div>
		<div class="collapse navbar-collapse headd" id="headd">
			<ul class="nav navbar-nav navbar-right">
				<li class="nav_items nav_items1"><a href="index.php#">HOME</a></li>
				<li class="nav_items"><a href="index.php#carousel-12">FEATURES</a></li>
				<li class="nav_items"><a href="index.php#contact">CONTACT</a></li> 
				<li class="nav_items active"><a href="#">ADMIN</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">	
				<?php
					if(isset($_SESSION['admin']))
					{
						?>
						<li class="nav_items admin_hover"><a><i class="glyphicon glyphicon-user"></i></a></li>
			<div class="admin_options">
				<p><?php echo "Admin : ".strtoupper($_SESSION['admin']);?></p>
				<a href="logout.php" class="btn btn-primary" onclick="return confirm('Are you sure you want to LOGOUT?')">Logout</a>
			</div>
					<?php
					}
				?></ul>
			
		</div>
	</div> 
</nav>

