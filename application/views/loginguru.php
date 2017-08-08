<?php require_once('hdr1.php');?>

		<!-- main -->
		<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Login</h2>
					</header>
				</div>
				<div class="container 50%">
					<form action="<?php echo base_url();?>index.php/Loginguru/do_loginguru" method="post">
						<div class="row uniform">
							<div class="12u$">
								<input name="name_guru" id="name" value="" placeholder="Nama" type="text" required>
							</div>
							<div class="12u$">
								<input name="password_guru" id="password" value="" placeholder="Password" type="Password" required>
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

			
<?php require_once("ftr.php");?>