<?php
	include_once'connection/connection.php';
	include_once'function.php';
	$_SESSION['qid']=$_REQUEST['id'];
	header('location:answers.php');
	

?>