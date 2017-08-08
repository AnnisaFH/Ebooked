<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-Book</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/skel.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/init.js"></script>
		
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" />
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style-xlarge.css" />
		</noscript>
	</head>
	<body>
	
	
		<!-- Header -->
			

		<!-- main -->
		<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Login</h2>
					</header>
				</div>
				<div class="container 50%">
					<form action="<?php echo base_url();?>index.php/Loginadmin/do_loginadmin" method="post">
						<div class="row uniform">
							<div class="12u$">
								<input name="name" id="name" value="" placeholder="Nama" type="text" required>
							</div>
							<div class="12u$">
								<input name="password" id="password" value="" placeholder="Password" type="Password" required>
							</div>
							<div class="12u$">
								</ul>
							<div>
								<input name="login" value="Login" class="special big" type="submit" style="center">
							</div>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; AnnisaFH. All rights reserved.</li>
								<li>A11.2014.08350</li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									
									<a class="icon rounded fa-facebook"  href="https://www.facebook.com/annisa.FH"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter" href="https://twitter.com/annisaaFH"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus" href="https://plus.google.com/"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-instagram" href="https://www.instagram.com/annisaa.fh/" ><span class="label">Instagram</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>



	</body>
</html>