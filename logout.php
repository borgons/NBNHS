<?php
ob_start(); 
	session_start();

	require('includes/connection.php');

	if(isset($_SESSION['txtIDno'])){
		session_destroy();
		echo "<script>alert('You are now Logging-Out. Thank you for visiting....')</script>";
		header("Refresh:1;url=adminLogIn.php");


	}else{
		echo "<script>You are now Logging-Out. Thank you for visiting...</script>";
		header("Refresh:2;url=adminLogIn.php");

	}



 ob_end_flush(); ?>

