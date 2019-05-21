<?php 
require ('includes/connection.php');
$gradetchOutput = "";
$gradeStdOutput = "";
$gradeFSemOutput = "";
$gradeSSemOutput = "";
$gradeVal = "";
$gradeAttd = "";
//================GRADES==============//

// FIRST SEM SEARCH

if(isset($_POST['grdQuery'])){

		$query =  mysqli_real_escape_string($conn, $_POST['grdQuery']);
        $stdResult = "SELECT * FROM tblstudent WHERE stdIDno = $query ";
        $result = mysqli_query ($conn,$stdResult);

        
        if($query == ""){
            echo "Please input the Student ID number<br>";
        }else{
            if(mysqli_num_rows($result)){
            	$gradeStdOutput .= '<br><section id = "main">
												<div class="container">
									
						 						<article id="stdGrades">
												 <h4 align="center">PERSONAL INFORMATION</h4>';	

                    while ($row = mysqli_fetch_array($result)){
  $gradeStdOutput .= '  <b>Student ID No.: - '.$row["stdIDno"].'</b> |
					    <b>Full Name: - '.$row["stdLastName"].'</b>
					    <b>'.$row["stdFirstName"].'</b>
					    <b>'.$row["stdMiddleName"].'</b><br> 
					    <b>BirthDate: - '.$row["stdDateBirth"].'</b> | 
					    <b>Age: - '.$row["stdAge"].'</b> |
					    <b>Gender: - '.$row["stdSex"].'</b> | 
					    <b>Grade: - '.$row["stdGrade"].'</b> |
					    <b>Section: - '.$row["stdSection"].'</b><br>  
					    <b>School Year: - '.$row["stdSchoolYear"].'</b>   ';

                    }
                    echo $gradeStdOutput;
                }   else{
                        // echo "Student ID not found";
             
            }

       }     


        $tchquery =  mysqli_real_escape_string($conn,$_POST['grdQuery']);
        $tchResult = "SELECT tblteacher.tchIDno, tblteacher.tchFirstName as stdtchIDF, tblteacher.tchLastName as stdtchIDL
        			  FROM tblstudent 
        			  LEFT JOIN tblteacher ON tblstudent.stdtchID = tblteacher.tchIDno WHERE stdIDno = $tchquery";
        			 
        $result = mysqli_query ($conn,$tchResult);
        
         if($query == ""){
            // echo "Please input the Teacher ID number<br><br>";
         } else {
            if(mysqli_num_rows($result)){
                    while ($row = mysqli_fetch_array($result)){
                        $gradetchOutput .= '<br> <br><b>Teacher ID no.: - '.$row["tchIDno"].'</b> |
											<b>Adviser: - '.$row["stdtchIDF"].'</b> 
											<b>'.$row["stdtchIDL"].'</b>';  
                    }
                      echo $gradetchOutput;   
                }
                
                	else{
                        // echo "ID not found";
                     }
            }


        $queryGr =  mysqli_real_escape_string($conn,$_POST['grdQuery']);
        $grdResult = "SELECT grdSSubCode,grdSubNameF,grdSFirstQtrOne,grdSSecondQtrOne,grdSFinalGrdOne,grdSGenAveOne FROM tblgradeshs WHERE grdSIDno = $queryGr ";
        $result = mysqli_query ($conn,$grdResult);

        
        if($queryGr == ""){
            // echo "Please input the Student ID number";
        }else{
            if(mysqli_num_rows($result) > 0){
            	$gradeFSemOutput .= '<br><section id = "main">
												<div class="container">
									
						 						<article id="stdGrades">
												 <h4 align="center">REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</h4>
												 <h4>First Semester</h4>
												 <div style="overflow-x:auto;">
													<table>
															<tr>
																<th>Sub Code</th>
																<th>SUB TITLE</th>
																<th>Q1</th>
																<th>Q2</th>
																<th>FINAL GRADES</th>
															</tr>
															';
                    while ($row = mysqli_fetch_array($result)){
                        //FIRST SEMESTER
												  $gradeFSemOutput .= '
														   <tr>
														    <td>'.$row["grdSSubCode"].'</td>
														    <td>'.$row["grdSubNameF"].'</td>
														    <td>'.$row["grdSFirstQtrOne"].'</td>
														    <td>'.$row["grdSSecondQtrOne"].'</td>
														    <td>'.$row["grdSFinalGrdOne"].'</td>
														   </tr>
  												';

  												$genAveOne = $row['grdSGenAveOne'];
                    }

                    echo $gradeFSemOutput;
                    echo '<tr><td colspan = "4">GENERAL AVERAGE</td>
                    					<td>'. $genAveOne .'</td>
                    			</tr></table></div>';
                }  else{
                        echo "ID not found";
             
            }



        }

            
}


//SECOND SEM

        $queryGr =  mysqli_real_escape_string($conn,$_POST['grdQuery']);
        $grdResult = "SELECT grdSSubCodeT,grdSubNameS,grdSFirstQtrTwo,grdSSecondQtrTwo,grdSFinalGrdTwo,grdSGenAveTwo FROM tblgradeshs WHERE grdSIDno = $queryGr ";
        $result = mysqli_query ($conn,$grdResult);

        
        if($queryGr == ""){
            //echo "Please input the Student ID number";
        }else{
            if(mysqli_num_rows($result) > 0){
            	$gradeSSemOutput .= '
																	
																	<div style="overflow-x:auto;">
																		<table>
																	<tr>
																		<th>SUBJECTS</th>
																		<th>SUB TITLE</th>
																		<th>Q1</th>
																		<th>Q2</th>
																		<th>SEMESTER FINAL GRADES</th>
																	</tr>
																	<br>
																	<h4>Second Semester</h4>		
																	';
						            while ($row = mysqli_fetch_array($result)){
						                //FIRST SEMESTER
														  $gradeSSemOutput .= '
																   <tr>
																    <td>'.$row["grdSSubCodeT"].'</td>
																    <td>'.$row["grdSubNameS"].'</td>
																    <td>'.$row["grdSFirstQtrTwo"].'</td>
																    <td>'.$row["grdSSecondQtrTwo"].'</td>
																    <td>'.$row["grdSFinalGrdTwo"].'</td>
																   </tr>
															';

														$genAveTwo = $row['grdSGenAveTwo'];	
						            }
						            echo $gradeSSemOutput;
						            echo '<tr><td colspan = "4">GENERAL AVERAGE</td>
                    					<td>'. $genAveTwo .'</td>
                    			</tr></table></div>';
					}  					 else{
						                //echo "ID not found";
						     
						    				}



        }

            





//================VALUES ==============//


if(isset($_POST['grdQuery'])){
        $queryVal =  mysqli_real_escape_string($conn,$_POST['grdQuery']);
        $valResult = "SELECT * FROM tblvalues WHERE valStdID = $queryVal ";
        $result = mysqli_query ($conn,$valResult);

        
        if($queryVal == ""){
            //echo "Please input the Student ID number";
        }else{
            if(mysqli_num_rows($result) > 0){
            	$gradeVal .= '<section id = "main">
														<div class="container">
													 	<article id="stdValues">
															<h4 align="center">REPORT ON LEARNERS OBSERVED VALUES</h4>
															<div style="overflow-x:auto;">
															 <table>
																		<tr>
																			<th>CORE VALUES</th>
																			<th>BEHAVIOR STATEMENTS</th>
																			<th>Q1</th>
																			<th>Q2</th>
																			<th>Q3</th>
																			<th>Q4</th>
																		</tr>';
                    while ($row = mysqli_fetch_array($result)){
                        	$MKDPtI_Qt1 = $row['valMKDPtIQtI'];
													$MKDPtI_Qt2 = $row['valMKDPtIQtII'];
													$MKDPtI_Qt3 = $row['valMKDPtIQtIII'];
													$MKDPtI_Qt4 = $row['valMKDPtIQtIV'];
													$MKDPtII_Qt1 = $row['valMKDPtIIQtI'];
													$MKDPtII_Qt2 = $row['valMKDPtIIQtII'];
													$MKDPtII_Qt3 = $row['valMKDPtIIQtII'];
													$MKDPtII_Qt4 = $row['valMKDPtIIQtIV'];
													$MTPtI_Qt1 = $row['valMKTPtIQtI'];
													$MTPtI_Qt2 = $row['valMKTPtIQtII'];
													$MTPtI_Qt3 = $row['valMKTPtIQtIII'];
													$MTPtI_Qt4 = $row['valMKTPtIQtIV'];
													$MTPtII_Qt1 = $row['valMKTPtIIQtI'];
													$MTPtII_Qt2 = $row['valMKTPtIIQtII'];
													$MTPtII_Qt3 = $row['valMKTPtIIQtIII'];
													$MTPtII_Qt4 = $row['valMKTPtIIQtIV'];
													$MKLK_Qt1 = $row['valMKKKQtI'];
													$MKLK_Qt2 = $row['valMKKKQtII'];
													$MKLK_Qt3 = $row['valMKKKQtIII'];
													$MKLK_Qt4 = $row['valMKKKQtIV'];
													$MKBPtI_Qt1 = $row['valMKBPtIQtI'];
													$MKBPtI_Qt2 = $row['valMKBPtIQtII'];
													$MKBPtI_Qt3 = $row['valMKBPtIQtIII'];
													$MKBPtI_Qt4 = $row['valMKBPtIQtIV'];
													$MKBPtII_Qt1 = $row['valMKBPtIIQtI'];
													$MKBPtII_Qt2 = $row['valMKBPtIIQtII'];
													$MKBPtII_Qt3 = $row['valMKBPtIIQtIII'];
													$MKBPtII_Qt4 = $row['valMKBPtIIQtIV'];
                    }

                    echo $gradeVal;
                    echo '<tr>
																			<td class="valueH">MAKA DIYOS</td>
																			<td>Expresses ones spiritual beliefs while respecting the spiritual beliefs of others</td>
																			<td>'.$MKDPtI_Qt1.'</td>
																			<td>'.$MKDPtI_Qt2.'</td>
																			<td>'.$MKDPtI_Qt3.'</td>
																			<td>'.$MKDPtI_Qt4.'</td>
																		</tr>    
																		<tr>
																			<td></td>
																			<td>Shows adherence to ethical principles by upholding truth</td>
																			<td>'.$MKDPtII_Qt1.'</td>
																			<td>'.$MKDPtII_Qt2.'</td>
																			<td>'.$MKDPtII_Qt3.'</td>
																			<td>'.$MKDPtII_Qt4.'</td>
																		</tr> 
																			<tr>
																			<td class="valueH">MAKATAO</td>
																			<td>Is senstive to individual social and cultural differences</td>
																			<td>'.$MTPtI_Qt1.'</td>
																			<td>'.$MTPtI_Qt2.'</td>
																			<td>'.$MTPtI_Qt3.'</td>
																			<td>'.$MTPtI_Qt4.'</td>
																		</tr>
																		<tr>
																			<td></td>
																			<td>Demonstrate contributions toward solidarity</td>
																			<td>'.$MTPtII_Qt1.'</td>
																			<td>'.$MTPtII_Qt2.'</td>
																			<td>'.$MTPtII_Qt3.'</td>
																			<td>'.$MTPtII_Qt4.'</td>
																		</tr> 
																		 <tr>
																			<td class="valueH">MAKAKALIKASAN</td>
																			<td>Cares for the environment and utilizes resources wisely judiciously and economically</td>
																			<td>'.$MKLK_Qt1.'</td>
																			<td>'.$MKLK_Qt2.'</td>
																			<td>'.$MKLK_Qt3.'</td>
																			<td>'.$MKLK_Qt4.'</td>
																		</tr>  
																		<tr>
																			<td class="valueH">MAKABANSA</td>
																			<td>Demonstrates pride in being a Filipino exercises the rights and responsibilites of a Filipino citizen</td>
																			<td>'.$MKBPtI_Qt1.'</td>
																			<td>'.$MKBPtI_Qt2.'</td>
																			<td>'.$MKBPtI_Qt3.'</td>
																			<td>'.$MKBPtI_Qt4.'</td>
																		</tr> 
																		<tr>
																			<td></td>
																			<td>Demonstrates appropriate behavior in carrying out activities in the school community and country</td>
																			<td>'.$MKBPtII_Qt1.'</td>
																			<td>'.$MKBPtII_Qt2.'</td>
																			<td>'.$MKBPtII_Qt3.'</td>
																			<td>'.$MKBPtII_Qt4.'</td>
																		</tr>   
															 </table> 
														 </div>        
													 </article>
								</div>
						</section>';
          }  else{
                        //echo "ID not found";
             
            }



		}

}

//================ATTENDANCE ==============//



if(isset($_POST['grdQuery'])){
        $queryAttd =  mysqli_real_escape_string($conn,$_POST['grdQuery']);
        $attdResult = "SELECT * FROM tblattendance WHERE attdStdID = $queryAttd ";
        $result = mysqli_query ($conn,$attdResult);

        
        if($queryAttd == ""){
            //echo "Please input the Student ID number";
        }else{
            if(mysqli_num_rows($result) > 0){
            	$gradeAttd .= '<section id = "main">
							<div class="container">
												 <article id="stdAttd">
														 <h4 align="center">REPORT ON LEARNERS ATTENDANCE</h4>
														 <div style="overflow-x:auto;">
																<table>
																		<tr>
																			<th>MONTHS</th>
																			<th>NO. OF PRESENT</th>
																			<th>NO. OF ABSENT</th>
																		</tr>';
                    while ($row = mysqli_fetch_array($result)){
                        		$attd_JunP = $row['attdJunP'];
														$attd_JulP = $row['attdJulP'];
														$attd_AugP = $row['attdAugP'];
														$attd_SeptP = $row['attdSeptP'];
														$attd_OctP = $row['attdOctP'];
														$attd_NovP = $row['attdNovP'];
														$attd_DecP = $row['attdDecP'];
														$attd_JanP = $row['attdJanP'];
														$attd_FebP = $row['attdFebP'];
														$attd_MarP = $row['attdMarP'];
														$attd_AprP = $row['attdAprP'];
														$attd_TotalP = $row['attdTotalP'];
														$attd_JunA = $row['attdJunA'];
														$attd_JulA = $row['attdJulA'];
														$attd_AugA = $row['attdAugA'];
														$attd_SeptA = $row['attdSeptA'];
														$attd_OctA = $row['attdOctA'];
														$attd_NovA = $row['attdNovA'];
														$attd_DecA = $row['attdDecA'];
														$attd_JanA = $row['attdJanA'];
														$attd_FebA = $row['attdFebA'];
														$attd_MarA = $row['attdMarA'];
														$attd_AprA = $row['attdAprA'];
														$attd_TotalA = $row['attdTotalA'];
                    }

                    echo $gradeAttd;
                    echo '<tr>
																			<td>JUNE</td>
																			<td>'.$attd_JunP.'</td>
																			<td>'.$attd_JunA.'</td>
																		</tr>    
																		<tr>
																			<td>JULY</td>
																			<td>'.$attd_JulP.'</td>
																			<td>'.$attd_JulA.'</td>
																		</tr> 
																			<tr>
																			<td>AUGUST</td>
																			<td>'.$attd_AugP.'</td>
																			<td>'.$attd_AugA.'</td>
																		</tr>
																		<tr>
																			<td>SEPTEMBER</td>
																			<td>'.$attd_SeptP.'</td>
																			<td>'.$attd_SeptA.'</td>
																		</tr> 
																		 <tr>
																			<td>OCTOBER</td>
																			<td>'.$attd_OctP.'</td>
																			<td>'.$attd_OctA.'</td>
																		</tr>  
																		<tr>
																			<td>NOVEMBER</td>
																			<td>'.$attd_NovP.'</td>
																			<td>'.$attd_NovA.'</td>
																		</tr> 
																		<tr>
																			<td>DECEMBER</td>
																			<td>'.$attd_DecP.'</td>
																			<td>'.$attd_DecA.'</td>
																		</tr>   
																		<tr>
																			<td>JANUARY</td>
																			<td>'.$attd_JanP.'</td>
																			<td>'.$attd_JanA.'</td>
																		</tr> 
																		<tr>
																			<td>FEBRUARY</td>
																			<td>'.$attd_FebP.'</td>
																			<td>'.$attd_FebA.'</td>
																		</tr> 
																		<tr>
																			<td>MARCH</td>
																			<td>'.$attd_MarP.'</td>
																			<td>'.$attd_MarA.'</td>
																		</tr> 
																		<tr>
																			<td>APRIL</td>
																			<td>'.$attd_AprP.'</td>
																			<td>'.$attd_AprA.'</td>
																		</tr> 
																		<tr>
																			<td>TOTAL</td>
																			<td>'.$attd_TotalP.'</td>
																			<td>'.$attd_TotalA.'</td>
																		</tr> 
															 </table> 
														 </div>        
													 </article>
								</div>
						</section>';
                }  
                else{
                        //echo "ID not found";
             
            	}



        }









































}




















?>
