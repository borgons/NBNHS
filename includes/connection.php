
<?php
	$dbhost = 'localhost';
	$dbusername = 'root';
	$dbpassword = 'borgstikong';
	$db = 'school';

//connect to the database
	$conn = mysqli_connect("$dbhost","$dbusername","$dbpassword","$db");



	if ($conn){

	}else{
		echo "Not Connected";

	}
?>

</body>
</html>
