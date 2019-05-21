<?php ob_start(); ?>
<?php
	include_once 'includes/connection.php';

session_start();

if(isset($_POST['btnLogin'])){

		$adminIDno = mysqli_real_escape_string($conn,$_POST['txtIDno']);
		$adminPass = mysqli_real_escape_string($conn,md5($_POST['txtPass']));


		$query = mysqli_query($conn,"SELECT * FROM tbladminuser WHERE adminID = '$adminIDno '");
	 	$numrows = mysqli_num_rows($query);

		if($numrows != 0){
				while($row = mysqli_fetch_assoc($query)){
					$dbAdminFirst = $row['adminFirst'];
					$dbAdminLast = $row['adminLast'];
					$dbAdminID = $row['adminID'];
					$dbAdminPass = $row['adminPass'];
				}
					if($adminIDno==$dbAdminID){
						if($adminPass==$dbAdminPass){
							echo "<script>alert('Access Granted | Welcome to www.samplewebsite.com')</script>";
							$_SESSION['txtIDno'] = $dbAdminLast;
							header("Refresh:2;url=blogIndexAdmin.php");
						}else{
							echo "<script>alert('IDno or Password incorrect!!!')</script>";
							header("Refresh:0;url=adminLogIn.php");
						}
					}else{
						echo "<script>alert('IDno or Password incorrect!!!')</script>";
						header("Refresh:0;url=adminLogIn.php");
					}
		}else{
			echo "<script>alert('You are not registered yet')</script>";
			header("Refresh:0;url=adminLogIn.php");
		}


	
		


}

ob_end_flush();

?>
