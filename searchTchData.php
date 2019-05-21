<?php
    include_once 'includes/connection.php';
  

//STUDENTS
    
    if(isset($_POST['tchQuery'])){
        $query =  mysqli_real_escape_string($conn,$_POST['tchQuery']);
        $tchResult = "SELECT * FROM tblteacher WHERE tchIDno = $query ";
        $result = mysqli_query ($conn,$tchResult);
        
         if($query == ""){
            echo "Please input the Teacher ID number<br><br>";
         } else {
            if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_array($result)){
                        $tchFirst = $row['tchFirstName'];
                        $tchLast = $row['tchLastName'];  
                        $tchMiddle = $row['tchMiddleName'];   
                      
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
        Last Name: <input type="text" id="srchTchLN" name=First placeholder="Type your First Name" class="grdLast" value="<?php echo $tchLast; ?>" disabled><br><br>
        First Name: <input type="text" id="srchTchFN" name=Last placeholder="Type your Last Name" class="grdFirst" value="<?php echo $tchFirst; ?>" disabled><br><br>
        Middle Name: <input type="text" id="srchTchMN" name="" class="grdMid"  value="<?php echo  $tchMiddle; ?>" disabled>
         </form>




 </body>
 </html>         

  















