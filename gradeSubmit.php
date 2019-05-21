
<?php
ob_start();
	require ('includes/connection.php');

if(isset($_POST['btnSubmitGr'])){	



$gradeStdID = mysqli_real_escape_string($conn,$_POST['lrnRefNo']);

//FIRST SEMESTER

$firstFSub = mysqli_real_escape_string($conn,$_POST['firstFSub']);
$secondFSub = mysqli_real_escape_string($conn,$_POST['secondFSub']);
$thirdFSub = mysqli_real_escape_string($conn,$_POST['thirdFSub']);
$fourthFSub = mysqli_real_escape_string($conn,$_POST['fourthFSub']);
$fifthFSub = mysqli_real_escape_string($conn,$_POST['fifthFSub']);
$sixthFSub = mysqli_real_escape_string($conn,$_POST['sixthFSub']);
$seventhFSub = mysqli_real_escape_string($conn,$_POST['seventhFSub']);
$eighthFSub = mysqli_real_escape_string($conn,$_POST['eighthFSub']);
$ninethFSub = mysqli_real_escape_string($conn,$_POST['ninethFSub']);

$firstFSubName = mysqli_real_escape_string($conn,$_POST['firstFSubName']);
$secondFSubName = mysqli_real_escape_string($conn,$_POST['secondFSubName']);
$thirdFSubName = mysqli_real_escape_string($conn,$_POST['thirdFSubName']);
$fourthFSubName = mysqli_real_escape_string($conn,$_POST['fourthFSubName']);
$fifthFSubName = mysqli_real_escape_string($conn,$_POST['fifthFSubName']);
$sixthFSubName = mysqli_real_escape_string($conn,$_POST['sixthFSubName']);
$seventhFSubName = mysqli_real_escape_string($conn,$_POST['seventhFSubName']);
$eighthFSubName = mysqli_real_escape_string($conn,$_POST['eighthFSubName']);
$ninethFSubName = mysqli_real_escape_string($conn,$_POST['ninethFSubName']);



 $cfrstFQtI = mysqli_real_escape_string($conn,$_POST['cfirstFQt1']);
 $cfrstFQtII = mysqli_real_escape_string($conn,$_POST['cfirstFQt2']);
  $csecondFQtI = mysqli_real_escape_string($conn,$_POST['csecondFQt1']);
 $csecondFQtII = mysqli_real_escape_string($conn,$_POST['csecondFQt2']);
  $cthirdFQtI = mysqli_real_escape_string($conn,$_POST['cthirdFQt1']);
 $cthirdFQtII = mysqli_real_escape_string($conn,$_POST['cthirdFQt2']);
  $cfourthFQtI = mysqli_real_escape_string($conn,$_POST['cfourthFQt1']);
 $cfourthFQtII = mysqli_real_escape_string($conn,$_POST['cfourthFQt2']);
  $cfifthFQtI = mysqli_real_escape_string($conn,$_POST['cfifthFQt1']);
 $cfifthFQtII = mysqli_real_escape_string($conn,$_POST['cfifthFQt2']);
  $csixthFQtI = mysqli_real_escape_string($conn,$_POST['csixthFQt1']);
 $csixthFQtII = mysqli_real_escape_string($conn,$_POST['csixthFQt2']);
  $cseventhFQtI = mysqli_real_escape_string($conn,$_POST['cseventhFQt1']);
 $cseventhFQtII = mysqli_real_escape_string($conn,$_POST['cseventhFQt2']);
  $ceighthFQtI = mysqli_real_escape_string($conn,$_POST['ceighthFQt1']);
 $ceighthFQtII = mysqli_real_escape_string($conn,$_POST['ceighthFQt2']);
  $cninthFQtI = mysqli_real_escape_string($conn,$_POST['cninthFQt1']);
 $cninthFQtII = mysqli_real_escape_string($conn,$_POST['cninthFQt2']);

$aveFGr = mysqli_real_escape_string($conn,$_POST['Fave']);

$firstFGr = mysqli_real_escape_string($conn,$_POST['firstFGr']);
$secondFGr = mysqli_real_escape_string($conn,$_POST['secondFGr']);
$thirdFGr =  mysqli_real_escape_string($conn,$_POST['thirdFGr']);
$fourthFGr = mysqli_real_escape_string($conn,$_POST['fourthFGr']);
$fifthFGr = mysqli_real_escape_string($conn,$_POST['fifthFGr']);
$sixthFGr = mysqli_real_escape_string($conn,$_POST['sixthFGr']);
$seventhFGr = mysqli_real_escape_string($conn,$_POST['seventhFGr']);
$eighthFGr = mysqli_real_escape_string($conn,$_POST['eighthFGr']);
$ninthFGr = mysqli_real_escape_string($conn,$_POST['ninthFGr']);


//SECOND SEMESTER
$firstSSub = mysqli_real_escape_string($conn,$_POST['firstSSub']);
$secondSSub = mysqli_real_escape_string($conn,$_POST['secondSSub']);
$thirdSSub = mysqli_real_escape_string($conn,$_POST['thirdSSub']);
$fourthSSub = mysqli_real_escape_string($conn,$_POST['fourthSSub']);
$fifthFSSub = mysqli_real_escape_string($conn,$_POST['fifthSSub']);
$sixthSSub = mysqli_real_escape_string($conn,$_POST['sixthSSub']);
$seventhSSub = mysqli_real_escape_string($conn,$_POST['seventhSSub']);
$eighthSSub = mysqli_real_escape_string($conn,$_POST['eighthSSub']);
$ninethSSub = mysqli_real_escape_string($conn,$_POST['ninthSSub']);

$firstSSubName = mysqli_real_escape_string($conn,$_POST['firstSSubName']);
$secondSSubName = mysqli_real_escape_string($conn,$_POST['secondSSubName']);
$thirdSSubName = mysqli_real_escape_string($conn,$_POST['thirdSSubName']);
$fourthSSubName = mysqli_real_escape_string($conn,$_POST['fourthSSubName']);
$fifthSSubName = mysqli_real_escape_string($conn,$_POST['fifthSSubName']);
$sixthSSubName = mysqli_real_escape_string($conn,$_POST['sixthSSubName']);
$seventhSSubName = mysqli_real_escape_string($conn,$_POST['seventhSSubName']);
$eighthSSubName = mysqli_real_escape_string($conn,$_POST['eighthSSubName']);
$ninethSSubName = mysqli_real_escape_string($conn,$_POST['ninthSSubName']);



 $cfirstSQtI = mysqli_real_escape_string($conn,$_POST['cfirstSQt1']);
 $cfirstSQtII = mysqli_real_escape_string($conn,$_POST['cfirstSQt2']);
  $csecondSQtI = mysqli_real_escape_string($conn,$_POST['csecondSQt1']);
 $csecondSQtII = mysqli_real_escape_string($conn,$_POST['csecondSQt2']);
  $cthirdSQtI = mysqli_real_escape_string($conn,$_POST['cthirdSQt1']);
 $cthirdSQtII = mysqli_real_escape_string($conn, $_POST['cthirdSQt2']);
  $cfourthSQtI = mysqli_real_escape_string($conn,$_POST['cfourthSQt1']);
 $cfourthSQtII = mysqli_real_escape_string($conn,$_POST['cfourthSQt2']);
  $cfifthSQtI = mysqli_real_escape_string($conn,$_POST['cfifthSQt1']);
 $cfifthSQtII = mysqli_real_escape_string($conn,$_POST['cfifthSQt2']);
  $csixthSQtI = mysqli_real_escape_string($conn,$_POST['csixthSQt1']);
 $csixthSQtII = mysqli_real_escape_string($conn,$_POST['csixthSQt2']);
  $cseventhSQtI = mysqli_real_escape_string($conn,$_POST['cseventhSQt1']);
 $cseventhSQtII = mysqli_real_escape_string($conn,$_POST['cseventhSQt2']);
  $ceighthSQtI = mysqli_real_escape_string($conn,$_POST['ceighthSQt1']);
 $ceighthSQtII = mysqli_real_escape_string($conn,$_POST['ceighthSQt2']);
  $cninthSQtI = mysqli_real_escape_string($conn,$_POST['cninthSQt1']);
 $cninthSQtII = mysqli_real_escape_string($conn,$_POST['cninthSQt2']);

$firstSGr = mysqli_real_escape_string($conn,$_POST['cfirstSGr']);
$secondSGr = mysqli_real_escape_string($conn,$_POST['csecondSGr']);
$thirdSGr =  mysqli_real_escape_string($conn,$_POST['cthirdSGr']);
$fourthSGr = mysqli_real_escape_string($conn,$_POST['cfourthSGr']);
$fifthSGr = mysqli_real_escape_string($conn,$_POST['cfifthSGr']);
$sixthSGr = mysqli_real_escape_string($conn,$_POST['csixthSGr']);
$seventhSGr = mysqli_real_escape_string($conn,$_POST['cseventhSGr']);
$eighthSGr = mysqli_real_escape_string($conn,$_POST['ceighthSGr']);
$ninthSGr = mysqli_real_escape_string($conn,$_POST['cninthSGr']);

$aveSGr = mysqli_real_escape_string($conn,$_POST['aveSGr']);







//======FIRST SEMESTER AND SECOND SEMESTER =====//
$order_array = array(
		"0" => array("$gradeStdID","$firstFSub",strip_tags("$firstFSubName"),"$cfrstFQtI","$cfrstFQtII","$firstFGr","$aveFGr","$firstSSub",strip_tags("$firstSSubName")," $cfirstSQtI"," $cfirstSQtII","$firstSGr","$aveSGr"),

		"1" => array("$gradeStdID","$secondFSub",strip_tags("$secondFSubName")," $csecondFQtI","$csecondFQtII","$secondFGr","$aveFGr","$secondSSub ",strip_tags("$secondSSubName"),"$csecondSQtI"," $csecondSQtII","$secondSGr","$aveSGr"),

		"2" => array("$gradeStdID","$thirdFSub",strip_tags("$thirdFSubName")," $cthirdFQtI","$cthirdFQtII","$thirdFGr","$aveFGr","$thirdSSub",strip_tags("$thirdSSubName"),"$cthirdSQtI"," $cthirdSQtII","$thirdSGr","$aveSGr"),

		"3" => array("$gradeStdID","$fourthFSub",strip_tags("$fourthFSubName")," $cfourthFQtI","$cfourthFQtII","$fourthFGr","$aveFGr","$fourthSSub",strip_tags("$fourthSSubName"),"$cfourthSQtI","$cfourthSQtII","$fourthSGr","$aveSGr"),

		"4" => array("$gradeStdID","$fifthFSub",strip_tags("$fifthFSubName")," $cfifthFQtI","$cfifthFQtII","$fifthFGr","$aveFGr","$fifthFSSub",strip_tags("$fifthSSubName"),"$cfifthSQtI","$cfifthSQtII","$fifthSGr","$aveSGr"),

		"5" => array("$gradeStdID","$sixthFSub",strip_tags("$sixthFSubName")," $csixthFQtI","$csixthFQtII","$sixthFGr","$aveFGr","$sixthSSub",strip_tags("$sixthSSubName"),"$csixthSQtI","$csixthSQtII","$sixthSGr","$aveSGr"),

		"6" => array("$gradeStdID","$seventhFSub",strip_tags("$seventhFSubName")," $cseventhFQtI","$cseventhFQtII","$seventhFGr","$aveFGr","$seventhSSub",strip_tags("$seventhSSubName"),"$cseventhSQtI"," $cseventhSQtII","$seventhSGr","$aveSGr"),

		"7" => array("$gradeStdID","$eighthFSub",strip_tags("$eighthFSubName")," $ceighthFQtI","$ceighthFQtII","$eighthFGr","$aveFGr","$eighthSSub",strip_tags("$eighthSSubName"),"$ceighthSQtI","$ceighthSQtII","$eighthSGr","$aveSGr"),

		"8" => array("$gradeStdID","$ninethFSub",strip_tags("$ninethFSubName")," $cninthFQtI","$cninthFQtII","$ninthFGr","$aveFGr","$ninethSSub",strip_tags("$ninethSSubName"),"$cninthSQtI"," $cninthSQtII","$ninthSGr","$aveSGr"),
		);



	//GRADES
	
		
function option1 ($array,$conn){

	if(is_array($array)) {
		foreach ($array as $row => $value){
			
			$a = mysqli_real_escape_string($conn, $value[0]);
			$b = mysqli_real_escape_string($conn, $value[1]);
			$c = mysqli_real_escape_string($conn, $value[2]);
			$d = mysqli_real_escape_string($conn, $value[3]);
			$e = mysqli_real_escape_string($conn, $value[4]);
			$f = mysqli_real_escape_string($conn, $value[5]);
			$g = mysqli_real_escape_string($conn, $value[6]);
			$h = mysqli_real_escape_string($conn, $value[7]);
			$i = mysqli_real_escape_string($conn, $value[8]);
		    $j = mysqli_real_escape_string($conn, $value[9]);
		    $k = mysqli_real_escape_string($conn, $value[10]);
		    $l = mysqli_real_escape_string($conn, $value[11]);
		    $m = mysqli_real_escape_string($conn, $value[12]);
			$sql = "INSERT INTO tblgradeshs (grdSIDno,grdSSubCode,grdSubNameF ,grdSFirstQtrOne,grdSSecondQtrOne,grdSFinalGrdOne,grdSGenAveOne,grdSSubCodeT,grdSubNameS,grdSFirstQtrTwo, grdSSecondQtrTwo,grdSFinalGrdTwo,grdSGenAveTwo) VALUES  ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";

			mysqli_query($conn,$sql);



		}

		
	}


}		

option1($order_array,$conn);
	


}


	// VALUES 

	$valStdID = mysqli_real_escape_string($conn,$_POST['lrnRefNo']);

	$MKDPtI_Qt1 = mysqli_real_escape_string($conn, $_POST['MKDPtIQt1']);
	$MKDPtI_Qt2 = mysqli_real_escape_string($conn, $_POST['MKDPtIQt2']);
	$MKDPtI_Qt3 = mysqli_real_escape_string($conn, $_POST['MKDPtIQt3']);
	$MKDPtI_Qt4 = mysqli_real_escape_string($conn, $_POST['MKDPtIQt4']);
	$MKDPtII_Qt1 = mysqli_real_escape_string($conn, $_POST['MKDPtIIQt1']);
	$MKDPtII_Qt2 = mysqli_real_escape_string($conn, $_POST['MKDPtIIQt2']);
	$MKDPtII_Qt3 = mysqli_real_escape_string($conn, $_POST['MKDPtIIQt3']);
	$MKDPtII_Qt4 = mysqli_real_escape_string($conn, $_POST['MKDPtIIQt4']);
	$MTPtI_Qt1 = mysqli_real_escape_string($conn, $_POST['MTPtIQt1']);
	$MTPtI_Qt2 = mysqli_real_escape_string($conn, $_POST['MTPtIQt2']);
	$MTPtI_Qt3 = mysqli_real_escape_string($conn, $_POST['MTPtIQt3']);
	$MTPtI_Qt4 = mysqli_real_escape_string($conn, $_POST['MTPtIQt4']);
	$MTPtII_Qt1 = mysqli_real_escape_string($conn, $_POST['MTPtIIQt1']);
	$MTPtII_Qt2 = mysqli_real_escape_string($conn, $_POST['MTPtIIQt2']);
	$MTPtII_Qt3 = mysqli_real_escape_string($conn, $_POST['MTPtIIQt3']);
	$MTPtII_Qt4 = mysqli_real_escape_string($conn, $_POST['MTPtIIQt4']);
	$MKLK_Qt1 = mysqli_real_escape_string($conn, $_POST['MKLKQt1']);
	$MKLK_Qt2 = mysqli_real_escape_string($conn, $_POST['MKLKQt2']);
	$MKLK_Qt3 = mysqli_real_escape_string($conn, $_POST['MKLKQt3']);
	$MKLK_Qt4 = mysqli_real_escape_string($conn, $_POST['MKLKQt4']);
	$MKBPtI_Qt1 = mysqli_real_escape_string($conn, $_POST['MKBPtIQt1']);
	$MKBPtI_Qt2 = mysqli_real_escape_string($conn, $_POST['MKBPtIQt2']);
	$MKBPtI_Qt3 = mysqli_real_escape_string($conn, $_POST['MKBPtIQt3']);
	$MKBPtI_Qt4 = mysqli_real_escape_string($conn, $_POST['MKBPtIQt4']);
	$MKBPtII_Qt1 = mysqli_real_escape_string($conn, $_POST['MKBPtIIQt1']);
	$MKBPtII_Qt2 = mysqli_real_escape_string($conn, $_POST['MKBPtIIQt2']);
	$MKBPtII_Qt3 = mysqli_real_escape_string($conn, $_POST['MKBPtIIQt3']);
	$MKBPtII_Qt4 = mysqli_real_escape_string($conn, $_POST['MKBPtIIQt4']);


	$val_Query = "INSERT INTO tblvalues ( valStdID, valMKDPtIQtI, valMKDPtIQtII, valMKDPtIQtIII, valMKDPtIQtIV, valMKDPtIIQtI, valMKDPtIIQtII, valMKDPtIIQtIII, valMKDPtIIQtIV ,valMKTPtIQtI ,valMKTPtIQtII ,valMKTPtIQtIII ,valMKTPtIQtIV ,valMKTPtIIQtI ,valMKTPtIIQtII ,valMKTPtIIQtIII ,valMKTPtIIQtIV ,valMKKKQtI ,valMKKKQtII ,valMKKKQtIII ,valMKKKQtIV ,valMKBPtIQtI ,valMKBPtIQtII ,valMKBPtIQtIII ,valMKBPtIQtIV ,valMKBPtIIQtI ,valMKBPtIIQtII ,valMKBPtIIQtIII,valMKBPtIIQtIV) VALUES
	 ('$valStdID','$MKDPtI_Qt1','$MKDPtI_Qt2','$MKDPtI_Qt3','$MKDPtI_Qt4','$MKDPtII_Qt1','$MKDPtII_Qt2','$MKDPtII_Qt3','$MKDPtII_Qt4', '$MTPtI_Qt1','$MTPtI_Qt2','$MTPtI_Qt3',' $MTPtI_Qt4','$MTPtII_Qt1','$MTPtII_Qt2','$MTPtII_Qt3','  $MTPtII_Qt4','$MKLK_Qt1'
	,'$MKLK_Qt2','$MKLK_Qt3','$MKLK_Qt4','$MKBPtI_Qt1','$MKBPtI_Qt2','$MKBPtI_Qt3','$MKBPtI_Qt4','$MKBPtII_Qt1','$MKBPtII_Qt2','$MKBPtII_Qt3','$MKBPtII_Qt4')";




	mysqli_query($conn,$val_Query);





	// //ATTENDANCE
	$attd_StdID = mysqli_real_escape_string($conn,$_POST['lrnRefNo']);

	$attd_JunP = mysqli_real_escape_string($conn,$_POST['pJun']);
	$attd_JulP = mysqli_real_escape_string($conn,$_POST['pJul']);
	$attd_AugP = mysqli_real_escape_string($conn,$_POST['pAug']);
	$attd_SeptP = mysqli_real_escape_string($conn,$_POST['pSept']);
	$attd_OctP = mysqli_real_escape_string($conn,$_POST['pOct']);
	$attd_NovP = mysqli_real_escape_string($conn,$_POST['pNov']);
	$attd_DecP = mysqli_real_escape_string($conn,$_POST['pDec']);
	$attd_JanP = mysqli_real_escape_string($conn,$_POST['pJan']);
	$attd_FebP = mysqli_real_escape_string($conn,$_POST['pFeb']);
	$attd_MarP = mysqli_real_escape_string($conn,$_POST['pMar']);
	$attd_AprP = mysqli_real_escape_string($conn,$_POST['pApr']);
	$attd_TotalP = mysqli_real_escape_string($conn,$_POST['pTotDays']);
	$attd_JunA = mysqli_real_escape_string($conn,$_POST['aJun']);
	$attd_JulA = mysqli_real_escape_string($conn,$_POST['aJul']);
	$attd_AugA = mysqli_real_escape_string($conn,$_POST['aAug']);
	$attd_SeptA = mysqli_real_escape_string($conn,$_POST['aSept']);
	$attd_OctA = mysqli_real_escape_string($conn,$_POST['aOct']);
	$attd_NovA = mysqli_real_escape_string($conn,$_POST['aNov']);
	$attd_DecA = mysqli_real_escape_string($conn,$_POST['aDec']);
	$attd_JanA = mysqli_real_escape_string($conn,$_POST['aJan']);
	$attd_FebA = mysqli_real_escape_string($conn,$_POST['aFeb']);
	$attd_MarA = mysqli_real_escape_string($conn,$_POST['aMar']);
	$attd_AprA = mysqli_real_escape_string($conn,$_POST['aApr']);
	$attd_TotalA = mysqli_real_escape_string($conn,$_POST['aTotDays']);
	

	$val_Query = "INSERT INTO tblattendance ( attdJunP,attdJulP ,attdAugP ,attdSeptP ,attdOctP ,attdNovP ,attdDecP ,attdJanP ,attdFebP ,attdMarP ,attdAprP,attdTotalP ,attdJunA ,attdJulA  ,attdAugA ,attdSeptA ,attdOctA ,attdNovA ,attdDecA ,attdJanA ,attdFebA ,attdMarA ,attdAprA ,attdTotalA ,attdStdID ) VALUES
	 ('$attd_JunP','$attd_JulP','$attd_AugP','$attd_SeptP','$attd_OctP','$attd_NovP','$attd_DecP','$attd_JanP','$attd_FebP', '$attd_MarP','$attd_AprP','$attd_TotalP', '$attd_JunA','$attd_JulA','$attd_AugA','$attd_SeptA','$attd_OctA','$attd_NovA'
	,'$attd_DecA','$attd_JanA','$attd_FebA','$attd_MarA','$attd_AprA','$attd_TotalA','$attd_StdID')";

	

	mysqli_query($conn,$val_Query);
		echo "<script>alert('You are now succesfully submitted')</script>";
		header("Refresh:2;url=blogIndexAdmin.php");


//Editing Student table 
	$stdID	= mysqli_real_escape_string($conn,$_POST['searchStdID']);
	$tchID = mysqli_real_escape_string($conn,$_POST['searchTchID']);

	$val_Query = "UPDATE tblstudent SET  stdtchID = '".$tchID."' WHERE stdIDno = $stdID ";

	mysqli_query($conn,$val_Query);


 ob_end_flush(); ?>



















