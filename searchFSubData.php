<?php
    include_once 'includes/connection.php';


  if(isset($_POST['subFQuery'])){
        $query =  mysqli_real_escape_string($conn,$_POST['subFQuery']);
        $subFResult = "SELECT * FROM tblsubject WHERE subCode = $query ";
        $Fresult = mysqli_query ($conn,$subFResult);
        
           if($query == ""){
                echo "Please input the Subject ID";
                //echo '<script>$("#btnFSubOne").show();</script>';
           }else{
                if(mysqli_num_rows($Fresult) > 0){
                    while ($row = mysqli_fetch_array($Fresult)){
                        $subFTit = $row['subTitle'];
                        echo $subFTit;
                        //echo '<script>$("#btnFSubOne").show();</script>';
                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnFSubOne").show();</script>';
             
                    }

           } 





            
     }
      

    if(isset($_POST['subFTwoQuery'])){
        $queryFTwo =  mysqli_real_escape_string($conn,$_POST['subFTwoQuery']);
        $subFResultTwo = "SELECT * FROM tblsubject WHERE subCode = $queryFTwo ";
        $resultFTwo = mysqli_query ($conn,$subFResultTwo);
        
    
        if($queryFTwo == ""){
            echo "Please input the Subject ID";
            // echo '<script>$("#btnFSubTwo").show();</script>';
        }else{
             if(mysqli_num_rows($resultFTwo) > 0){
                    while ($row = mysqli_fetch_array($resultFTwo)){
                        $subFTitTwo = $row['subTitle'];
                        echo $subFTitTwo;
                        // echo '<script>$("#btnFSubTwo").show();</script>';     
                    }
                }   else{
                        echo "Sub Code ID not found";
                        // echo '<script>$("#btnFSubTwo").show();</script>';
             
              }

        }


           
     }    



     if(isset($_POST['subFThreeQuery'])){
        $queryFThree =  mysqli_real_escape_string($conn,$_POST['subFThreeQuery']);
        $subFResultThree = "SELECT * FROM tblsubject WHERE subCode = $queryFThree ";
        $resultFThree = mysqli_query ($conn,$subFResultThree);
        
    
        if($queryFThree == ""){
            echo "Please input the Subject ID";
            //echo '<script>$("#btnFSubThree").show();</script>';
        }else{
            if(mysqli_num_rows($resultFThree) > 0){
                    while ($row = mysqli_fetch_array($resultFThree)){
                        $subFTitThree = $row['subTitle'];
                        echo $subFTitThree;
                        //echo '<script>$("#btnFSubThree").show();</script>';
                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnFSubThree").show();</script>';             
                    }

        }

            
     }    


     if(isset($_POST['subFFourQuery'])){
        $queryFFour =  mysqli_real_escape_string($conn,$_POST['subFFourQuery']);
        $subFResultFour = "SELECT * FROM tblsubject WHERE subCode = $queryFFour ";
        $resultFFour = mysqli_query ($conn,$subFResultFour);
        
    
        if($queryFFour == ""){
            echo "Please input the Subject ID";
            //echo '<script>$("#btnFSubFour").show();</script>';
        }else{
            if(mysqli_num_rows($resultFFour) > 0){
                    while ($row = mysqli_fetch_array($resultFFour)){
                        $subFTitFour = $row['subTitle'];
                       echo $subFTitFour;   
                    }
                }   else{
                        echo "Sub Code ID not found";
                       // echo '<script>$("#btnFSubFour").show();</script>';
                    }

        }

            
     }    


     if(isset($_POST['subFFiveQuery'])){
        $queryFFive = mysqli_real_escape_string($conn, $_POST['subFFiveQuery']);
        $subFResultFive = "SELECT * FROM tblsubject WHERE subCode = $queryFFive ";
        $resultFFive = mysqli_query ($conn,$subFResultFive);
        
         if($queryFFive == ""){
            echo "Please input the Subject ID";
            //echo '<script>$("#btnFSubFive").show();</script>';
         }else{
             if(mysqli_num_rows($resultFFive) > 0){
                    while ($row = mysqli_fetch_array($resultFFive)){
                        $subFTitFive = $row['subTitle'];
                        echo $subFTitFive;
                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnFSubFive").show();</script>';
             }

         }   


           
     }  

     if(isset($_POST['subFSixQuery'])){
        $queryFSix = mysqli_real_escape_string($conn, $_POST['subFSixQuery']);
        $subFResultSix = "SELECT * FROM tblsubject WHERE subCode = $queryFSix ";
        $resultFSix = mysqli_query ($conn,$subFResultSix);
        
        if($queryFSix == ""){
            echo "Please input the Subject ID";
            //echo '<script>$("#btnFSubSix").show();</script>';
        }else{
             if(mysqli_num_rows($resultFSix) > 0){
                    while ($row = mysqli_fetch_array($resultFSix)){
                        $subFTitSix = $row['subTitle'];
                        echo $subFTitSix;
                    }
                }   else{
                        echo "Sub Code ID not found";
                        //echo '<script>$("#btnFSubSix").show();</script>';
             
             }

        }

    
           
     }  

      if(isset($_POST['subFSevenQuery'])){
        $queryFSeven =  mysqli_real_escape_string($conn,$_POST['subFSevenQuery']);
        $subFResultSeven = "SELECT * FROM tblsubject WHERE subCode = $queryFSeven ";
        $resultFSeven = mysqli_query ($conn,$subFResultSeven);
        
        if($queryFSeven == ""){
             echo "Please input the Subject ID";
             //echo '<script>$("#btnFSubSeven").show();</script>';
        }else{
             if(mysqli_num_rows($resultFSeven) > 0){
                    while ($row = mysqli_fetch_array($resultFSeven)){
                        $subFTitSeven = $row['subTitle'];
                        echo $subFTitSeven;
                    }
                }   else{
                        echo "Sub Code ID not found";
                       // echo '<script>$("#btnFSubSeven").show();</script>';
             
                 }    

        }




           
     }  


    

      if(isset($_POST['subFEightQuery'])){
        $queryFEight =  mysqli_real_escape_string($conn,$_POST['subFEightQuery']);
        $subFResultEight = "SELECT * FROM tblsubject WHERE subCode = $queryFEight ";
        $resultFEight = mysqli_query ($conn,$subFResultEight);
        

        if($queryFEight == ""){
            echo "Please input the Subject ID";
          //  echo '<script>$("#btnFSubEight").show();</script>';
        }else{
            if(mysqli_num_rows($resultFEight) > 0){
                    while ($row = mysqli_fetch_array($resultFEight)){
                        $subFTitEight = $row['subTitle'];
                        echo $subFTitEight;
                    }
                }   else{
                        echo "Sub Code ID not found";
                        // echo '<script>$("#btnFSubEight").show();</script>';
             
                    }

        }
    
            
     }  


     if(isset($_POST['subFNineQuery'])){
        $queryFNine =  mysqli_real_escape_string($conn,$_POST['subFNineQuery']);
        $subFResultNine = "SELECT * FROM tblsubject WHERE subCode = $queryFNine ";
        $resultFNine = mysqli_query ($conn,$subFResultNine);
        
    
        if($queryFNine == ""){
            echo "Please input the Subject ID";
          //  echo '<script>$("#btnFSubNine").show();</script>';
        }else{
            if(mysqli_num_rows($resultFNine) > 0){
                    while ($row = mysqli_fetch_array($resultFNine)){
                        $subFTitNine = $row['subTitle'];
                        echo $subFTitNine;
                    }
                }   else{
                        echo "Sub Code ID not found";
                      //  echo '<script>$("#btnFSubNine").show();</script>';
             
                    }


        }

            
     }  


?>


