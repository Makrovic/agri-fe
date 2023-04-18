<?php  
$config = mysqli_connect("localhost","root","","nolkoma"); 
if (!$config) {  
	die('Gagal terhubung ke MySQL: '.mysqli_connect_error()); 
}  
?> 