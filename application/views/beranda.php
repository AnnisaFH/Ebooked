<?php require_once("hdr.php");?>

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
								<a href="<?php echo base_url();?>index.php/Welcome/kelas7">
								<i class="icon big rounded color1 fa-language"></i>
								<h3>Kelas 7</h3>
								<p>Pendidikan yang bermutu menciptakan bangsa yang maju</p>
							</a>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							 <section class="box">
							 	<a href="<?php echo base_url();?>index.php/Welcome/kelas8">
								<i class="icon big rounded color9 fa-line-chart"></i>
								<h3>Kelas 8</h3>
								<p>Pendidikanmu berperan besar dalam masa depanmu</p>
							</a>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<a href="<?php echo base_url();?>index.php/Welcome/kelas9">
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
								<i class="icon big rounded color1 fa-user"></i>
								<h4>Kepala Sekolah</h4>
								<p>Annisa Fitrianingtiyas H</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<i class="icon big rounded color1 fa-user"></i>
								<h4>Guru 1</h4>
								<p>Sintia Rahma H</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<i class="icon big rounded color1 fa-user"></i>
								<h4>Guru 2</h4>
								<p>Atika Farhana H</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<i class="icon big rounded color1 fa-user"></i>
								<h4>Guru 3</h4>
								<p>Idayati</p>
							</section>
						</div>
					</section>
					<footer>
						<p>Orang yang bisa membuat semua hal yang sulit menjadi mudah dipahami, yang rumit menjadi mudah dimengerti, atau atau yang sukar menjadi mudah dilakukan, itulah pendidik yang sejati.</p>
						<ul class="actions">
							<ul class="actions">
					<li>
						<a href="#banner" class="button big" id="top-link" class="skel-layers-ignoreHref">Kenali Kami</a>
					</li>
				</ul>
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
					<form action="<?php echo base_url();?>index.php/Crud/tambahtamu" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="nama" id="name" value="" placeholder="Nama" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="pesan" id="message" placeholder="Pesan" rows="6"></textarea>
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

<?php require_once("ftr.php");?>