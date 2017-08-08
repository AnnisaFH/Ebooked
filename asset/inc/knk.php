<?php
$db_host = "localhost";
$db_name = "e-learning";
$db_user = "root";
$db_pass = "";

try{
	$con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
	 // $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch(PDOException $e){
	echo $e->getMessage();
}

?>