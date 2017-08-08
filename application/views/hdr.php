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
		 <!--<script src="js/jquery.scrollto.js"></script>-->
		<script src="<?php echo base_url();?>asset/js/skel.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/init.js"></script>
		
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" />
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style-xlarge.css" />
		<noscript>
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="<?php echo base_url();?>index.php/Welcome/index">E-Book</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo base_url();?>index.php/Welcome/index">Beranda</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/ts">Tentang Kami</a></li>
						<li><a href="#three">Buku Tamu</a></li>
						
				
						
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

</script>

						
					</ul>
				</nav>
			</header>

