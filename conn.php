<?php
	$con = mysqli_connect('localhost','root','abc456');
	mysqli_select_db($con,'imagetest');
	
	if (mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_errno());
	}
?>