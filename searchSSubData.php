<?php
    include_once 'includes/connection.php';

  if(isset($_POST['subSQuery'])){
        $query =  mysqli_real_escape_string($conn,$_POST['subSQuery']);
        $subSResult = "SELECT * FROM tblsubject WHERE subCode = $query ";
        $Sresult = mysqli_query ($conn,$subSResult);
        
    
            if($query == ""){
                echo "Please input the Subject ID";
                //echo '<script>$("#btnSSubOne").show();</script>';
            }else{

                if(mysqli_num_rows($Sresult) > 0){
                    while ($row = mysqli_fetch_array($Sresult)){
                        $subSTit = $row['subTitle'];
                        echo $subSTit; 

                        
                       // echo '<script>$("#btnSSubOne").show();</script>';
                    }
                }   else{
                            echo "Sub Code ID not found";
                            //echo '<script>$("#btnSSubOne").show();</script>';
                }

            }    
            
}
      

    if(isset($_POST['subSTwoQuery'])){
        $querySTwo = mysqli_real_escape_string($conn, $_POST['subSTwoQuery']);
        $subSResultTwo = "SELECT * FROM tblsubject WHERE subCode = $querySTwo ";
        $resultSTwo = mysqli_query ($conn,$subSResultTwo);
        
           if($querySTwo == ""){
                echo "Please input the Subject ID";
                //echo '<script>$("#btnSSubTwo").show();</script>';
           }else{
                if(mysqli_num_rows($resultSTwo) > 0){
                    while ($row = mysqli_fetch_array($resultSTwo)){
                        $subSTitTwo = $row['subTitle'];
                         echo $subSTitTwo; 

                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnSSubTwo").show();</script>';
                    }

           } 
      
     }    



     if(isset($_POST['subSThreeQuery'])){
        $querySThree =  mysqli_real_escape_string($conn,$_POST['subSThreeQuery']);
        $subSResultThree = "SELECT * FROM tblsubject WHERE subCode = $querySThree ";
        $resultSThree = mysqli_query ($conn,$subSResultThree);
        
        if($querySThree == ""){
            echo "Please input the Subject ID";
            //echo '<script>$("#btnSSubThree").show();</script>';
        }else{
             if(mysqli_num_rows($resultSThree) > 0){
                    while ($row = mysqli_fetch_array($resultSThree)){
                        $subSTitThree = $row['subTitle'];
                       echo $subSTitThree; 
                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnSSubThree").show();</script>';
             
            }

        }

           
     }    


     if(isset($_POST['subSFourQuery'])){
        $querySFour =  mysqli_real_escape_string($conn,$_POST['subSFourQuery']);
        $subSResultFour = "SELECT * FROM tblsubject WHERE subCode = $querySFour ";
        $resultSFour = mysqli_query ($conn,$subSResultFour);
        
        if($querySFour == ""){
            echo "Please input the subject ID";
            //echo '<script>$("#btnSSubFour").show();</script>';

        }else{
            if(mysqli_num_rows($resultSFour) > 0){
                    while ($row = mysqli_fetch_array($resultSFour)){
                        $subSTitFour = $row['subTitle'];
                        echo $subSTitFour; 

                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnSSubFour").show();</script>';
                    }

        }



            
     }    


     if(isset($_POST['subSFiveQuery'])){
        $querySFive =  mysqli_real_escape_string($conn,$_POST['subSFiveQuery']);
        $subSResultFive = "SELECT * FROM tblsubject WHERE subCode = $querySFive ";
        $resultSFive = mysqli_query ($conn,$subSResultFive);
        
    
        if($querySFive == ""){
            echo "Please input the subject ID";
            //echo '<script>$("#btnSSubFive").show();</script>';

        }else{
            if(mysqli_num_rows($resultSFive) > 0){
                    while ($row = mysqli_fetch_array($resultSFive)){
                        $subSTitFive = $row['subTitle'];
                         echo $subSTitFive; 
                    }
                }   else{
                        echo "Sub Code ID not found";
                       // echo '<script>$("#btnSSubFive").show();</script>';
                    }

        }



            
     }  

     if(isset($_POST['subSSixQuery'])){
        $querySSix = mysqli_real_escape_string($conn, $_POST['subSSixQuery']);
        $subSResultSix = "SELECT * FROM tblsubject WHERE subCode = $querySSix ";
        $resultSSix = mysqli_query ($conn,$subSResultSix);
        
    
        if($querySSix == ""){
            echo "Please input the subject ID";
           // echo '<script>$("#btnSSubSix").show();</script>';
        }else{
            if(mysqli_num_rows($resultSSix) > 0){
                    while ($row = mysqli_fetch_array($resultSSix)){
                        $subSTitSix = $row['subTitle'];
                         echo $subSTitSix; 
                    }
                }   else{
                        echo "Sub Code ID not found";
                       // echo '<script>$("#btnSSubSix").show();</script>';
            }
        }
            
     }  

      if(isset($_POST['subSSevenQuery'])){
        $querySSeven = mysqli_real_escape_string($conn, $_POST['subSSevenQuery']);
        $subSResultSeven = "SELECT * FROM tblsubject WHERE subCode = $querySSeven ";
        $resultSSeven = mysqli_query ($conn,$subSResultSeven);
        
        if($querySSeven == ""){
            echo "Please input the subject ID";
        //    echo '<script>$("#btnSSubSeven").show();</script>';
        }else{
            if(mysqli_num_rows($resultSSeven) > 0){
                    while ($row = mysqli_fetch_array($resultSSeven)){
                        $subSTitSeven = $row['subTitle'];
                        echo $subSTitSeven; 
                    }
                }   else{
                        echo "Sub Code ID not found";
            //                echo '<script>$("#btnSSubSeven").show();</script>';
                    }

        }



            
     }  


    

      if(isset($_POST['subSEightQuery'])){
        $querySEight = mysqli_real_escape_string($conn, $_POST['subSEightQuery']);
        $subSResultEight = "SELECT * FROM tblsubject WHERE subCode = $querySEight ";
        $resultSEight = mysqli_query ($conn,$subSResultEight);
        
        if($querySEight == ""){
            echo "Please input the subject ID";
           // echo '<script>$("#btnSSubEight").show();</script>';
        }else{
             if(mysqli_num_rows($resultSEight) > 0){
                    while ($row = mysqli_fetch_array($resultSEight)){
                        $subSTitEight = $row['subTitle'];
                          echo $subSTitEight; 
                    }
                }   else{
                        echo "Sub Code ID not found";
               //             echo '<script>$("#btnSSubEight").show();</script>';
                    }

        }





    
           
     }  


     if(isset($_POST['subSNineQuery'])){
        $querySNine = mysqli_real_escape_string($conn, $_POST['subSNineQuery']);
        $subSResultNine = "SELECT * FROM tblsubject WHERE subCode = $querySNine ";
        $resultSNine = mysqli_query ($conn,$subSResultNine);
        
    

        if($querySNine == ""){
            echo "Please input the subject ID";
            //echo '<script>$("#btnSSubNine").show();</script>';
        }else{
            if(mysqli_num_rows($resultSNine) > 0){
                    while ($row = mysqli_fetch_array($resultSNine)){
                        $subSTitNine = $row['subTitle'];
                          echo $subSTitNine; 
                    }
                }   else{
                        echo "Sub Code ID not found";
                //        echo '<script>$("#btnSSubNine").show();</script>';
                    }    
        }




            
     }  

?>
