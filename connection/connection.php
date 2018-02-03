<?php
	error_reporting(0);
	session_start();
	ob_start();
	$con=mysqli_connect("localhost","root","") or die("Connection not found");
	mysqli_select_db($con,"a5ques_user") or die("No DB");
?>