<?php
    include_once 'includes/connection.php';
  

//STUDENTS
    
    if(isset($_POST['stdQuery'])){
        $query =  mysqli_real_escape_string($conn, $_POST['stdQuery']);
        $stdResult = "SELECT * FROM tblstudent WHERE stdIDno = $query ";
        $result = mysqli_query ($conn,$stdResult);

        
        if($query == ""){
            echo "Please input the Student ID number<br>";



        }else{
            if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_array($result)){
                        $stdLast = $row['stdLastName'];
                        $stdFirst = $row['stdFirstName'];  

                        $stdMiddle = $row['stdMiddleName'];   
                        $stdDate = $row['stdDateBirth'];   
                        $stdAge = $row['stdAge'];   
                        $stdSex= $row['stdSex'];  
                        $stdGr = $row['stdGrade'];   
                        $stdSec = $row['stdSection'];  
                        $stdSY = $row['stdSchoolYear'];   
                    }
                }   else{
                        echo "ID not found";
             
            }



        }

            
    }

        

        
                
    

?>
        
<!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
        <form action= "find.php"  method="POST"><br>
        Last Name: <input type="text" id="srchGrdLN" placeholder="Type your First Name" value="<?php echo $stdLast; ?>" disabled><br><br>
        First Name:<input type="text" id="srchGrdFN" name=Last placeholder="Type your Last Name"  value="<?php echo $stdFirst; ?>" disabled><br><br>
        Middle Name: <input type="text" id="srchGrdMN"  value="<?php echo  $stdMiddle; ?>" disabled><br><br>
        Date of Birth: <input type="text" id="srchGrdDoB" value="<?php echo  $stdDate; ?>" disabled> <br><br>
        Age: <input type="text" name="" id="srchGrdAge" class="grdAge"  value="<?php echo  $stdAge; ?>" disabled><br><br>
        Sex: <input type="text" name="" id="srchGrdSex" class="grdSex"  value="<?php echo  $stdSex; ?>" disabled><br><br>
        Grade: <input type="text" name="" id="srchGrdGr" class="grdGrade"  value="<?php echo  $stdGr; ?>" disabled><br><br>
        Section: <input type="text" name="" id="srchGrdSection" class="grdSection"  value="<?php echo  $stdSec; ?>" disabled><br><br>
        School Year: <input type="text" name="" id="srchGrdSY" class="grdSchoolYear"  value="<?php echo  $stdSY; ?>" disabled><br>
         </form>




 </body>
 </html>         

  















