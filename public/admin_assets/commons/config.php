<?php 
	$host_name = "localhost";
	$user_name = "root";
	$password = "";
	$database_name = "popular_fashion_db";
	$conn = mysqli_connect($host_name, $user_name, $password, $database_name) or die("Databse not connected ". mysqli_connect_error());
?>