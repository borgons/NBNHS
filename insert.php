<?php

	include_once 'includes/connection.php';

if(isset($_POST['btnSubmit'])){

	$ID = mysqli_real_escape_string ($conn, $_POST['adminIDs']);
	$First = mysqli_real_escape_string ($conn,$_POST['adminFirsts']);
	$Last = mysqli_real_escape_string ($conn,$_POST['adminLasts']);
	$Roles = mysqli_real_escape_string ($conn,$_POST['adminRoles']);
	$dateReg =  mysqli_real_escape_string ($conn,$_POST['adminDateReg']);
	$Pass = mysqli_real_escape_string ($conn,$_POST['adminPasss']);
	$passwordMd5 = md5 ($Pass);

	$sql = "INSERT INTO tbladminuser (adminID,adminFirst,adminLast,adminRole,adminDateReg,adminPass) VALUES
	 ('$ID','$First','$Last','$Roles','$dateReg','$passwordMd5')";




	mysqli_query($conn,$sql);
		echo "<script>alert('You are now succesfully registered')</script>";
		header("Refresh:2;url=adminLogin.php");

}
?>
