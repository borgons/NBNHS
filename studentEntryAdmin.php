<?php ob_start(); ?>
<?php
     session_start();
     require('includes/connection.php');

 $stdIDss = "";
$stdLast =  "";
$stdFirst = "";
$stdMiddle =  "";
$stdBirth =  "";
$stdAge =  "";
$stdSex =  "";
$stdGrade =  "";
$stdSection = "";
$stdSY =  "";



     //Session
     if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=adminLogIn.php");
	}
    
 
     if(isset($_POST['btnInsert'])){
          // Get form data
          $stdIDss = mysqli_real_escape_string($conn, $_POST['stdIDs']);
          $stdLast = mysqli_real_escape_string($conn, $_POST['stdLastName']);
          $stdFirst = mysqli_real_escape_string($conn,$_POST['stdFirstName']);
          $stdMiddle = mysqli_real_escape_string($conn,$_POST['stdMiddleName']);
          $stdBirth = mysqli_real_escape_string($conn, $_POST['stdBirthDate']);
          $stdAge = mysqli_real_escape_string($conn, $_POST['stdAge']);
          $stdSex = mysqli_real_escape_string($conn,$_POST['stdSex']);
          $stdGrade = mysqli_real_escape_string($conn,$_POST['stdGrade']);
          $stdSection = mysqli_real_escape_string($conn,$_POST['stdSection']);
          $stdSY = mysqli_real_escape_string($conn,$_POST['stdSchoolYear']);

          $query = "INSERT INTO tblstudent(stdIDno,stdLastName,stdFirstName,stdMiddleName,stdDateBirth,stdAge,stdSex,stdGrade,stdSection,stdSchoolYear) VALUES
          ('$stdIDss', '$stdLast', '$stdFirst', 
          '$stdMiddle','$stdBirth','$stdAge','$stdSex','$stdGrade','$stdSection','$stdSY')";

          if(mysqli_query($conn, $query)){
                 echo "<script>alert('Record has been added')</script>"; 
               header("Refresh:2;url=studentEntryAdmin.php");
               
             
               
          } else {
               echo 'ERROR: '. mysqli_error($conn);
          }
     }

     //SEARCH
     if(isset($_POST['btnSearchStd'])){
            $stdIDss = mysqli_real_escape_string($conn,$_POST['stdIDs']);
            $searchedQuery = "SELECT * FROM tblstudent WHERE stdIDno = $stdIDss";
            $result = mysqli_query($conn,$searchedQuery);

            if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_array($result)){
                $stdIDss = $row['stdIDno'];
                $stdLast = $row['stdLastName'];
                $stdFirst = $row['stdFirstName'];
                $stdMiddle = $row['stdMiddleName'];
                $stdBirth = $row['stdDateBirth'];
                $stdAge = $row['stdAge'];
                $stdSex = $row['stdSex'];
                $stdGrade = $row['stdGrade'];
                $stdSection = $row['stdSection'];
                $stdSY = $row['stdSchoolYear'];  
              }
            } else{
                echo "<script>alert('Student ID no. not found')</script>";
                header("Refresh:0;url=studentEntryAdmin.php");
              }
     }


     //UPDATE
     if(isset($_POST['btnUpdate'])){
                $stdIDss = $_POST['stdIDs'];
                $stdLast = $_POST['stdLastName'];
                $stdFirst = $_POST['stdFirstName'];
                $stdMiddle = $_POST['stdMiddleName'];
                $stdBirth = $_POST['stdBirthDate'];
                $stdAge = $_POST['stdAge'];
                $stdSex = $_POST['stdSex'];
                $stdGrade = $_POST['stdGrade'];
                $stdSection = $_POST['stdSection'];
                $stdSY = $_POST['stdSchoolYear']; 

           $updateQuery = "UPDATE tblstudent SET  stdLastName = '".$stdLast."', stdFirstName = '".$stdFirst."',stdMiddleName = '".$stdMiddle."' ,stdDateBirth = '".$stdBirth."',stdAge = '".$stdAge."',stdSex = '".$stdSex."',stdGrade = '".$stdGrade."',stdSection = '".$stdSection."',stdSchoolYear = '".$stdSY."' WHERE stdIDno = $stdIDss";

           $result = mysqli_query($conn, $updateQuery);


          if($result){
              echo "<script>alert('Your student record has been updated')</script>";
              header("Refresh:0;url=blogIndexAdmin.php");

            }else {
              echo "<script>alert('Data Not Updated')</script>";
            }

}            
          ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="img/schoolIcon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.9.0/jquery.validate.js"></script>
    <script src="js/validation.js"></script>
    <script type="text/javascript">  
         $(document).ready(function(){
              $('.menu').click(function(){
                    $('ul').toggleClass('active');
              })

          }) 
    </script>
    <title>Admin Page | New Bataan National High School</title>
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
                        <li class="current"><a href="studentEntryAdmin.php">ENTRY</a></li>
                        <li><a href="gradeAdmin.php">GRADES</a></li>
                        <li class ="adminuser"><?php  echo 'WELCOME '.$_SESSION['txtIDno'];?></li>
                        <li><a href="logout.php">LOG-OUT</a></li>
                   </ul>
              </div>
    </nav>
<!--Container -->
<section id = "main">
		<div class="container">
			<div class= "linkpage">Student - <a class="linksEntry" href="teacherEntryAdmin.php">Teachers</a>  - <a class="linksEntry" href="subjectEntryAdmin.php">Subject</a><a class="linksE" href="blogIndexAdmin.php">&larr; Back</a></div>
               <article id="function">
               
                  <form name = "myForm" id="stdRegistration" action= "studentEntryAdmin.php" method="POST">
                           <label>Student ID#:</label><input type="text" id="postsStdID" name="stdIDs" placeholder="Type your Student ID Number" value="<?php echo $stdIDss; ?>"><input type="submit" name="btnSearchStd"  value="SEARCH"><br><br>
                           <label>Last Name:</label><input type="text" id="postsStdLast" name="stdLastName" placeholder="Type your First Name" value="<?php echo $stdLast; ?>" ><br><br>
                           <label>First Name:</label><input type="text" id="postsStdFirst" name="stdFirstName" placeholder="Type your Last Name" value="<?php echo $stdFirst; ?>"></input><br><br>
                           <label>Middle Name:</label><input type="text" id="postsStdMid" name="stdMiddleName" placeholder="Type your Middle Name" value="<?php echo $stdMiddle; ?>"></input><br><br>
                           <label>Date Birth:</label><input type="text" id="postsStdDate" name="stdBirthDate" placeholder="Type your Date YYYY-MM-DD" value="<?php echo $stdBirth; ?>"><br><br>
                           <label>Age:</label><input type="text" id="postsStdAge" name="stdAge" placeholder="Type your Age" value="<?php echo $stdAge; ?>"><br><br>
                           <label>Sex:</label><input type="text" id="postsStdSex" name="stdSex" placeholder="Type your Sex" value="<?php echo $stdSex; ?>"><br><br>
                           <label>Grade:</label><input type="text" id="postsStdGrd" name="stdGrade" placeholder="Type your Grade" value="<?php echo $stdGrade; ?>"><br><br>
                           <label>Section:</label><input type="text" id="postsStdSec" name="stdSection" placeholder="Type your Section" value="<?php echo $stdSection; ?>"><br><br>
                           <label>School Year:</label><input type="text" id="postsStdSY" name="stdSchoolYear" placeholder="Type your School Year" value="<?php echo $stdSection; ?>"><br><br>

                           <input type="submit" name="btnInsert" class="buttonSub"  value="Add Student"> 
                           <input type="submit" name="btnUpdate" class="buttonSub"  value="Update Student">

                           
                   </form>
               </article>
		</div>
</section>

     <footer class="loginF" >
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
<?php ob_end_flush(); ?>

<!-- name="btnSearchStd" -->