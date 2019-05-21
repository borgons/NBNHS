<?php
//CONSIST SEARCH OF STUDENTS AND TEACHERS
require('includes/connection.php');

	$stdLast =  "";
	 $stdFirst = "";
	 $stdMiddle = "";
	 $stdDate = "";
	 $stdAge = "";
	 $stdSex = "";
	 $stdGr =  "";
	 $stdSec = "";
	 $stdSY = "";


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tblStudent 
  WHERE stdIDno =$search
  ";
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0){
	 while($row = mysqli_fetch_array($result))
	 {
	  
	 $stdLast = $row["stdLastName"];
	 $stdFirst = $row["stdFirstName"];
	 $stdMiddle = $row["stdMiddleName"];
	 $stdDate = $row["stdDateBirth"];
	 $stdAge = $row["stdAge"];
	 $stdSex = $row["stdSex"];
	 $stdGr = $row["stdGrade"];  
	 $stdSec = $row["stdSection"];
	 $stdSY = $row["stdSchoolYear"];

	 }
	 echo $output;
	}
	else
	{
	 echo 'Data Not Found';
	}




?>


