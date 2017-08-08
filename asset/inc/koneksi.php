<?php
   session_start();
   ob_start();
   if(isset($_SESSION['user'])) {
   header('location:home.php'); }
   require_once("inc/konek.php");
?>

  <?php require_once("nav_login1.php");?>
	
	<center>
		<img src="img/logo.png">
	</center>
	<!-- Form -->
	<div class="container" style="background:#fff; -webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 14px; padding: 10px;">
	
		
		<div class="row">
			
		    <form action="proseslogin.php" method="post" class="col s12">
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <input  type="text" name="user" class="validate" required>
				  <label>Username</label>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" name="pass" class="validate" required>
				  <label >Password</label>
		        </div>
		      </div>
			  </div>
			  
			  <div class="row">
		          <center>
				  
				  
	 <button id="submit" class="btn waves-effect waves-light" value="Daftar" type="submit" style="width: 70%;">Login
	  <i class="fa fa-sign-in"></i>
	 </button><br/>

		          <!--<a href="daftar.php" style="color:#fff;"><div class="btn waves-effect waves-light">Daftar 
		          
		          </div></a>-->
				  
				  <p style="font-size: 12pt;"><a href="lp.php">Lupa Password?</a><br/>Belum punya akun? <a href="daftar.php">Daftar disini</a><br/></p>
		          </center>
				</div>
			</div>
		      
		    </form>
  		</div>
	</div>
	<!-- /Form -->
	
	
	</body>
	
  </html>