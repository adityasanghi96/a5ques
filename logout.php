<?php
	session_start();
	session_unset();
	session_destroy();
	ob_start();
	ob_end_flush(); 
	header("location:index.php");
	
	exit();
?>