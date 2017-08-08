
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-Learning</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
		 <!--<script src="js/jquery.scrollto.js"></script>-->
		<script src="<?php echo base_url();?>asset/js/skel.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" />
			<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">E-Learning</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo base_url();?>index.php/Welcome/index">Beranda</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/ts">Tentang Kami</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/hk">Hubungi Kami</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/mskguru">Masuk</a></li>
						
					</ul>
				</nav>
			</header>
		<!-- Banner -->
			<section id="banner">
				<h2>Halo Teman-Teman</h2>
				<p>Selamat Belajar di Pembelajaran Elektronik Khusus SMP</p>
				<nav>
				<ul class="actions">
					<li>
						<a href="#Menu" class="button big" id="top-link" class="skel-layers-ignoreHref">Yuk Belajar</a>
					</li>
				</ul>
				</nav>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="section primary-section" id="Menu">
				<div class="container">
					<header class="major">
						<h2>Mulailah Belajar Teman</h2>
						<p>Pilih Kelasmu Terlebih Dahulu Teman</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="Kelas1.php">
								<i class="icon big rounded color1 fa-language"></i>
								<h3>Kelas 7</h3>
								<p>Pendidikan yang bermutu menciptakan bangsa yang maju</p>
							</a>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							 <section class="box">
							 	<a href="Kelas2.php">
								<i class="icon big rounded color9 fa-line-chart"></i>
								<h3>Kelas 8</h3>
								<p>Pendidikanmu berperan besar dalam masa depanmu</p>
							</a>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<a href="Kelas3.php">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Kelas 9</h3>
								<p>Baca, pahami, praktekan, sukses</p>
								</a>
							</section>
						</div>
					</div>
				</div>
			</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Kenali Guru Kami</h2>
						<p>"Pendidikan adalah jembatan kesuksesan dan guru adalah pemandu kesuksesan"</p>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="<?php echo base_url();?>asset/images/profile_placeholder.gif" alt="" />
								<h4>Kepala Sekolah</h4>
								<p>Annisa Fitrianingtiyas H</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="<?php echo base_url();?>asset/images/profile_placeholder.gif" alt="" />
								<h4>Guru 1</h4>
								<p>Sintia Rahma H</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="<?php echo base_url();?>asset/images/profile_placeholder.gif" alt="" />
								<h4>Guru 2</h4>
								<p>Atika Farhana H</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="<?php echo base_url();?>asset/images/profile_placeholder.gif" alt="" />
								<h4>Guru 3</h4>
								<p>Idayati</p>
							</section>
						</div>
					</section>
					<footer>
						<p>Orang yang bisa membuat semua hal yang sulit menjadi mudah dipahami, yang rumit menjadi mudah dimengerti, atau atau yang sukar menjadi mudah dilakukan, itulah pendidik yang sejati.</p>
						<ul class="actions">
							<li>
								<a href="#" class="button big">Kenali Kami</a>
							</li>
						</ul>
					</footer>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Buku Tamu</h2>
						<p>Tulislah Kesanmu Disini Teman</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Nama" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Pesan" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Kirim" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

	
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

<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Tentang Saya</h3>
								<ul class="unstyled">
									<li>Annisa FH</li>
									<li>A11.2014.08350</a></li>
									<li>Universitas Dian Nuswantoro</a></li>
									<li><a href="#">Nostrum nemo dolorum facilis</a></li>
									<li><a href="#">Quo fugit dolor totam</a></li>
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Culpa quia, nesciunt</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Reiciendis dicta laboriosam enim</a></li>
									<li><a href="#">Corporis, non aut rerum</a></li>
									<li><a href="#">Laboriosam nulla voluptas, harum</a></li>
									<li><a href="#">Facere eligendi, inventore dolor</a></li>
								</ul>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Neque, dolore, facere</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
									<li><a href="#">Explicabo inventore itaque autem</a></li>
									<li><a href="#">Aperiam harum, sint quibusdam</a></li>
									<li><a href="#">Labore excepturi assumenda</a></li>
								</ul>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Illum, tempori, saepe</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Recusandae, culpa necessita nam</a></li>
									<li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
									<li><a href="#">Tempore nam, enim quia</a></li>
									<li><a href="#">Explicabo molestiae dolor labore</a></li>
								</ul>
							</section>
						</div>
					</section>
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