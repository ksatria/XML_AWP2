<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "awp2";
	
	$con = mysql_connect($host,$user,$pass) 
			or die("Koneksi ke MySQL gagal dibentuk");
			
	mysql_select_db($db,$con) 
			or die("Database $db tidak dapat diakses");
?>