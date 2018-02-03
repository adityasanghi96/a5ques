<?php
	error_reporting(0);
	session_start();
	ob_start();
	$con=mysqli_connect("localhost","a5ques_user","Tech1617!") or die("Connection not found");
	mysqli_select_db("a5ques_user",$con) or die("No DB");
?>