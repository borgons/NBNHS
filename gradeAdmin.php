<?php ob_start(); ?>
<?php
	 session_start();
	 require('includes/connection.php');
		 //
	if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=adminLogIn.php");
	}

?>


<!--===========HTML PROPER ===========================================!-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="img/schoolIcon.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 

		<script src="js/firstSemResult.js"></script>
		<script src="js/secondSemResult.js"></script>  
		<script src="js/searchStudent.js"></script>
		<script src="js/searchTeacher.js"></script>

		<script src="js/searchFSubject.js"></script>
		<script src="js/searchSSubject.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.9.0/jquery.validate.js"></script>
		<script src="js/validation.js"></script>
		<script type="text/javascript">
				 $(document).ready(function(){
							$('.menu').click(function(){
										$('ul').toggleClass('active');
							})
				 })
		</script>
		
		<title>Grades Page | New Bataan National High School</title>
	</head>
	<body>
<!--NAV -->
		<nav>
				 <div class ="toggleAd">
						 <i class="fas fa-bars menu" aria-hidden="true"></i> <span class ="adminuser"><?php  echo 'WELCOME '.$_SESSION['txtIDno'];?></span>
				 </div>
							<div class="container">
									 <ul>
												
												<li><a href="blogIndexAdmin.php">ANNOUNCEMENTS</a></li>
												<li><a href="addPost.php">ADD POST</a></li>
												<li><a href="studentEntryAdmin.php">ENTRY</a></li>
												<li class="current"><a href="#">GRADES</a></li>
												<li class ="adminuser"><?php  echo 'WELCOME '.$_SESSION['txtIDno'];?></li>
														<li><a href="logout.php">LOG-OUT</a></li>
									 </ul>
							</div>
		</nav>

<!--     STUDENT PERSONAL INFO -->
<form method= "POST" action="gradeSubmit.php">
						<section id = "main">
								<div class="container">
												 <article id="stdInfo">
													<h2 align="center">TEMPORARY PROGRESS REPORT CARD FOR SHS</h2>
													<h4 align="center">PERSONAL INFORMATION</h4>

										 
												LR No# : <input type="text" name="lrnRefNo" id="grdsearchLRN" maxlength="12" required> 
														<br><hr><br>
													Student ID# : <input type="text" id="stdQuery" name="searchStdID" class="grdsearchSTD" maxlength="12">
													 <div id="stdResult"></div> <br>
													 <input type="submit"   value="SEARCH STUDENT" id="btnStudentSrch">
													
													 <br><br><br><hr><br><br>
												
													Teachers ID# : <input type="text" id="tchQuery" class="grdLast" name="searchTchID" maxlength="12" > 
													<div id="tchResult"></div> <br>
													<br>
												 <input type="submit"   value="SEARCH TEACHER" id="btnTeacherSrch">
										 			
													
												 </article>
								</div>
						</section>
						<hr class = "border">
				 <!-- STUDENT GRADES    -->
						<section id = "main">
								<div class="container">
									
						 <article id="stdGrades">
								 <h4 align="center">REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</h4>
								 <h4>First Semester</h4>
								 <div style="overflow-x:auto;">
									<table>
											<tr>
												<th>SUB CODE</th>
												<th>SUB TITLE</th>
												<th>Q1</th>
												<th>Q2</th>
												<th>SEMESTER FINAL GRADES</th>
											</tr>
											<tr>
												<td class="csHighlight" colspan="5">CORE SUBJECTS</td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subFQuery" name="firstFSub"><input type="submit" id="btnFSubOne" value="SEARCH SUBJECT"></td>
												<td><div id ="subFOneResult"></div><input name="firstFSubName"></td>
												<td><input class="valuesRate" type="number" id="cfirstQt1Gr" name="cfirstFQt1" min="70" 	max="100"></td>
												<td><input class="valuesRate" type="number" id="cfirstQt2Gr" name="cfirstFQt2" min="70" 	max="100"></td>
												<td><input class="valuesFG" type="number"  id="fgSubOne"  name="firstFGr" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subFTwoQuery" name="secondFSub"><input type="submit" id="btnFSubTwo" value="SEARCH SUBJECT"></td>
												<td><div id ="subFTwoResult"></div><input name="secondFSubName"></td>
												<td><input class="valuesRate" type="number" id="csecondQt1Gr" name="csecondFQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="csecondQt2Gr" name="csecondFQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="secondFGr" id="fgSubTwo" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text"  id="subFThreeQuery" name="thirdFSub"><input type="submit" id="btnFSubThree" value="SEARCH SUBJECT"></td>
												<td><div id ="subFThreeResult"></div><input name="thirdFSubName"></td>
												<td><input class="valuesRate" type="number" id="cthirdQt1Gr" name="cthirdFQt1" min="70" 	max="100"></td>
												<td><input class="valuesRate" type="number" id="cthirdQt2Gr" name="cthirdFQt2" min="70" 	max="100"></td>
												<td><input class="valuesFG" type="number" name="thirdFGr" id="fgSubThree"  step="any"></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subFFourQuery" name="fourthFSub"><input type="submit" id="btnFSubFour" value="SEARCH SUBJECT"></td>
												<td><div id ="subFFourResult"></div><input name="fourthFSubName"></td>
												<td><input class="valuesRate" type="number" id="cfourthQt1Gr" name="cfourthFQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cfourthQt2Gr" name="cfourthFQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="fourthFGr" id="fgSubFour" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subFFiveQuery" name="fifthFSub"><input type="submit" id="btnFSubFive" value="SEARCH SUBJECT"></td>
												 <td><div id ="subFFiveResult"></div><input name="fifthFSubName"></td>
												<td><input class="valuesRate" type="number" id="cfifthQt1Gr" name="cfifthFQt1" min="70"		 max="100"></td>
												<td><input class="valuesRate" type="number" id="cfifthQt2Gr" name="cfifthFQt2" min="70" 	max="100"></td>
												<td><input class="valuesFG" type="number" name="fifthFGr" id="fgSubFive" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subFSixQuery" name="sixthFSub"><input type="submit" id="btnFSubSix" value="SEARCH SUBJECT"></td>
												 <td><div id ="subFSixResult"></div><input name="sixthFSubName"></td>
												<td><input class="valuesRate" type="number" id="csixthQt1Gr" name="csixthFQt1" min="70" 	max="100"></td>
												<td><input class="valuesRate" type="number" id="csixthQt2Gr" name="csixthFQt2" min="70"		 max="100"></td>
												<td><input class="valuesFG" type="number" name="sixthFGr" id="fgSubSix" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subFSevenQuery" name="seventhFSub"><input type="submit" id="btnFSubSeven" value="SEARCH SUBJECT"></td>
												<td><div id ="subFSevenResult"></div><input name="seventhFSubName"></td>
												<td><input class="valuesRate" type="number" id="cseventhQt1Gr" name="cseventhFQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cseventhQt2Gr" name="cseventhFQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="seventhFGr" id="fgSubSeven" step="any"></td>
											</tr>
										<tr>
												<td class="csHighlight" colspan="5">APPLIED AND SPECIALIZED SUBJECTS</td>
											</tr>
										 <tr>
													<td><input class="valuesRate" type="text" id="subFEightQuery" name="eighthFSub"><input type="submit" id="btnFSubEight" value="SEARCH SUBJECT"></td>
													<td><div id ="subFEightResult"></div><input name="eighthFSubName"></td>
													<td><input class="valuesRate" type="number" id="ceighthQt1Gr" name="ceighthFQt1" 		min="70" max="100"></td>
													<td><input class="valuesRate" type="number" id="ceighthQt2Gr" name="ceighthFQt2" 		min="70" max="100"></td>
													<td><input class="valuesFG" type="number" name="eighthFGr" id="fgSubEight" step="any"></td>
											</tr>
											<tr>
													<td><input class="valuesRate" type="text" id="subFNineQuery" name="ninethFSub"><input type="submit" id="btnFSubNine" value="SEARCH SUBJECT"></td>
													 <td><div id ="subFNineResult" ></div><input name="ninethFSubName"></td>
													<td><input class="valuesRate" type="number" id="cninthQt1Gr" name="cninthFQt1" min="70" max="100"></td>
													<td><input class="valuesRate" type="number" id="cninthQt2Gr" name="cninthFQt2" min="70" max="100"></td>
													<td><input class="valuesFG" type="number" name="ninthFGr" id="fgSubNine" step="any"></td>
											</tr>
										<tr>
												<td class="aveHighlight" colspan="4">GENERAL AVERAGE FOR THIS SEMESTER &rarr;</td>
												<td><input class="valuesFG" type="number" id="FaverageGrade"  name="Fave" step="any"></td>
										</tr>
										</table>
									</div>
												<button type="button"  id="firstCalculate" name="">COMPUTE AVERAGE</button><br><br>
										
									
<!--------------------------SECOND SEMESTER -------------------------------------->
										<hr>
										<h4>Second Semester</h4>
										<div style="overflow-x:auto;">
											<table>
											<tr>
												<th>SUB CODE</th>
												<th>SUB TITLE</th>
												<th>Q1</th>
												<th>Q2</th>
												<th>SEMESTER FINAL GRADES</th>
											</tr>
											<tr>
												<td class="csHighlight" colspan="5">CORE SUBJECTS</td>
											</tr>
											<!--<input type="text" id="subSOneResult" name=""> -->
											<tr>
												<td><input class="valuesRate" type="text" id="subSQuery" name="firstSSub"><input type="submit" id="btnSSubOne" value="SEARCH SUBJECT"></td>
												<td><div id="subSOneResult"></div><input name="firstSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSfirstQt1Gr" name="cfirstSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSfirstQt2Gr" name="cfirstSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="cfirstSGr" id="sfgSubOne" step="any"></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subSTwoQuery" name="secondSSub"><input type="submit" id="btnSSubTwo" value="SEARCH SUBJECT"></td>
												 <td><div id ="subSTwoResult"> </div><input name="secondSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSsecondQt1Gr" name="csecondSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSsecondQt2Gr" name="csecondSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="csecondSGr" id="sfgSubTwo" step="any"></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text"  id="subSThreeQuery" name="thirdSSub"><input type="submit" id="btnSSubThree" value="SEARCH SUBJECT"></td>
												<td><div id ="subSThreeResult"> </div><input name="thirdSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSthirdQt1Gr" name="cthirdSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSthirdQt2Gr" name="cthirdSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="cthirdSGr" id="sfgSubThree"  step="any"></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subSFourQuery" name="fourthSSub"><input type="submit" id="btnSSubFour" value="SEARCH SUBJECT"></td>
												<td><div id ="subSFourResult"> </div><input name="fourthSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSfourthQt1Gr" name="cfourthSQt1"  min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSfourthQt2Gr" name="cfourthSQt2"  min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="cfourthSGr" id="sfgSubFour" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subSFiveQuery" name="fifthSSub"><input type="submit" id="btnSSubFive" value="SEARCH SUBJECT"></td>
												<td><div id ="subSFiveResult"> </div><input name="fifthSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSfifthQt1Gr" name="cfifthSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSfifthQt2Gr" name="cfifthSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="cfifthSGr" id="sfgSubFive" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text"  id="subSSixQuery" name="sixthSSub"><input type="submit" id="btnSSubSix" value="SEARCH SUBJECT"></td>
												<td><div id ="subSSixResult" > </div><input name="sixthSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSsixthQt1Gr" name="csixthSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSsixthQt2Gr" name="csixthSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="csixthSGr" id="sfgSubSix" step="any" ></td>
											</tr>
										<tr>
												<td class="csHighlight" colspan="5">CONTEXTUALIZED SUBJECTS</span></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subSSevenQuery" name="seventhSSub"><input type="submit" id="btnSSubSeven" value="SEARCH SUBJECT"></td>
												 <td><div id ="subSSevenResult"> </div><input name="seventhSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSseventhQt1Gr" name="cseventhSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSseventhQt2Gr" name="cseventhSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="cseventhSGr" id="sfgSubSeven" step="any" ></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subSEightQuery" name="eighthSSub"><input type="submit" id="btnSSubEight" value="SEARCH SUBJECT"></td>
												<td><div id ="subSEightResult"> </div><input name="eighthSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSeighthQt1Gr" name="ceighthSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSeighthQt2Gr" name="ceighthSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="ceighthSGr" id="sfgSubEight" step="any" ></td>
											</tr>
											 <tr>
												<td class="csHighlight" colspan="5">SPECIALIZED SUBJECTS</span></td>
											</tr>
											<tr>
												<td><input class="valuesRate" type="text" id="subSNineQuery" name="ninthSSub"><input type="submit" id="btnSSubNine" value="SEARCH SUBJECT"></td>
												<td><div id ="subSNineResult"> </div><input name="ninthSSubName"></td>
												<td><input class="valuesRate" type="number" id="cSninthQt1Gr" name="cninthSQt1" min="70" max="100"></td>
												<td><input class="valuesRate" type="number" id="cSninthQt2Gr" name="cninthSQt2" min="70" max="100"></td>
												<td><input class="valuesFG" type="number" name="cninthSGr" id="sfgSubNine" step="any" ></td>
											</tr>
											<tr>
												<td class="aveHighlight" colspan="4">GENERAL AVERAGE FOR THIS SEMESTER &rarr;</span></td>
												<td><input class="valuesFG" type="number" name="aveSGr" id="SaverageGrade" step="any"></td>
										</tr>
										</table>
									</div>
												<button type="button"  id="secondCalculate" name="">COMPUTE AVERAGE</button>
												
										
						 </article>
											
								</div>
						</section>
								<hr class="border">

				 <!-- STUDENT RATING VALUES   -->
						<section id = "main">
								<div class="container">
													 <article id="stdValues">
															<h4 align="center">REPORT ON LEARNER'S OBSERVED VALUES</h4>
															<div style="overflow-x:auto;">
															 <table>
																		<tr>
																			<th>CORE VALUES</th>
																			<th>BEHAVIOR STATEMENTS</th>
																			<th>Q1</th>
																			<th>Q2</th>
																			<th>Q3</th>
																			<th>Q4</th>
																		</tr>
																		<tr>
																			<td class="valueH">MAKA DIYOS</td>
																			<td>Expresses one's spiritual beliefs while respecting the spiritual beliefs of others</td>
																			<td><input class="valuesBR" type="text" name="MKDPtIQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKDPtIQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKDPtIQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKDPtIQt4" maxlength="1"></td>
																		</tr>    
																		<tr>
																			<td></td>
																			<td>Shows adherence to ethical principles by upholding truth</td>
																			<td><input class="valuesBR" type="text" name="MKDPtIIQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKDPtIIQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKDPtIIQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKDPtIIQt4" maxlength="1"></td>
																		</tr> 
																			<tr>
																			<td class="valueH">MAKATAO</td>
																			<td>Is senstive to individual social and cultural differences</td>
																			<td><input class="valuesBR" type="text" name="MTPtIQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MTPtIQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MTPtIQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MTPtIQt4" maxlength="1"></td>
																		</tr>
																		<tr>
																			<td></td>
																			<td>Demonstrate contributions toward solidarity</td>
																			<td><input class="valuesBR" type="text" name="MTPtIIQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MTPtIIQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MTPtIIQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MTPtIIQt4" maxlength="1"></td>
																		</tr> 
																		 <tr>
																			<td class="valueH">MAKAKALIKASAN</td>
																			<td>Cares for the environment and utilizes resources wisely judiciously and economically</td>
																			<td><input class="valuesBR" type="text" name="MKLKQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKLKQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKLKQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKLKQt4" maxlength="1"></td>
																		</tr>  
																		<tr>
																			<td class="valueH">MAKABANSA</td>
																			<td>Demonstrates pride in being a Filipino exercises the rights and responsibilites of a Filipino citizen</td>
																			<td><input class="valuesBR" type="text" name="MKBPtIQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKBPtIQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKBPtIQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKBPtIQt4" maxlength="1"></td>
																		</tr> 
																		<tr>
																			<td></td>
																			<td>Demonstrates appropriate behavior in carrying out activities in the school community and country</td>
																			<td><input class="valuesBR" type="text" name="MKBPtIIQt1" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKBPtIIQt2" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKBPtIIQt3" maxlength="1"></td>
																			<td><input class="valuesBR" type="text" name="MKBPtIIQt4" maxlength="1"></td>
																		</tr>   
															 </table> 
														 </div>        
													 </article>
								</div>
						</section>

							<hr class="border">
					 <!-- STUDENT ATTENDANCE   -->
					<section id = "main">
							<div class="container">
												 <article id="stdAttd">
														 <h4 align="center">REPORT ON LEARNER'S ATTENDANCE</h4>
														 <div style="overflow-x:auto;">
																<table>
																		<tr>
																			<th></th>
																			<th>JUN</th>
																			<th>JUL</th>
																			<th>AUG</th>
																			<th>SEPT</th>
																			<th>OCT</th>
																			<th>NOV</th>
																			<th>DEC</th>
																			<th>JAN</th>
																			<th>FEB</th>
																			<th>MAR</th>
																			<th>APRIL</th>
																			<th>TOTAL</th>
																		</tr>
																		<tr>
																			<td>No. of school days</td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDays" type="text" name=""></td>
																			<td><input class="valuesDaysTot" type="text" name=""></td>
																		</tr>
																		<tr>
																			<td>No. of days present</td>
																			<td><input class="valuesDays" type="text" name="pJun"></td>
																			<td><input class="valuesDays" type="text" name="pJul"></td>
																			<td><input class="valuesDays" type="text" name="pAug"></td>
																			<td><input class="valuesDays" type="text" name="pSept"></td>
																			<td><input class="valuesDays" type="text" name="pOct"></td>
																			<td><input class="valuesDays" type="text" name="pNov"></td>
																			<td><input class="valuesDays" type="text" name="pDec"></td>
																			<td><input class="valuesDays" type="text" name="pJan"></td>
																			<td><input class="valuesDays" type="text" name="pFeb"></td>
																			<td><input class="valuesDays" type="text" name="pMar"></td>
																			<td><input class="valuesDays" type="text" name="pApr"></td>
																			<td><input class="valuesDaysTot" type="text" name="pTotDays"></td>
																		</tr>
																		<tr>
																			<td>No. of days absent</td>
																			<td><input class="valuesDays" type="text" name="aJun"></td>
																			<td><input class="valuesDays" type="text" name="aJul"></td>
																			<td><input class="valuesDays" type="text" name="aAug"></td>
																			<td><input class="valuesDays" type="text" name="aSept"></td>
																			<td><input class="valuesDays" type="text" name="aOct"></td>
																			<td><input class="valuesDays" type="text" name="aNov"></td>
																			<td><input class="valuesDays" type="text" name="aDec"></td>
																			<td><input class="valuesDays" type="text" name="aJan"></td>
																			<td><input class="valuesDays" type="text" name="aFeb"></td>
																			<td><input class="valuesDays" type="text" name="aMar"></td>
																			<td><input class="valuesDays" type="text" name="aApr"></td>
																			<td><input class="valuesDaysTot" type="text" name="aTotDays"></td>
																		</tr>
															 </table>  
														</div>   
														<br> 
													 <input type="submit" name="btnSubmitGr" class="buttonSub" value="Submit Grade">
												 </article>
												
							</div>
					</section>
</form>



		 <footer class="loginF">
					<p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
		 </footer>
	</body>
</html>
<?php ob_end_flush(); ?>