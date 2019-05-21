<?php ob_start(); ?>
<?php
     session_start();
     require('includes/connection.php');
$tchID = "";
$tchLast = "";
$tchFirst ="";
$tchMiddle = "";

     //Session
     if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=adminLogIn.php");
	}

     // Inserting of Post
     if(isset($_POST['btnInsert'])){
          // Get form data
          $tchID = mysqli_real_escape_string($conn, $_POST['tchID']);
          $tchLast = mysqli_real_escape_string($conn, $_POST['tchLastName']);
          $tchFirst = mysqli_real_escape_string($conn,$_POST['tchFirstName']);
          $tchMiddle = mysqli_real_escape_string($conn,$_POST['tchMiddleName']);
         


          $query = "INSERT INTO tblteacher(tchIDno,tchLastName ,tchFirstName,tchMiddleName) 
          VALUES('$tchID', '$tchLast', '$tchFirst', '$tchMiddle')";

          if(mysqli_query($conn, $query)){
               header("Refresh:2;url=teacherEntryAdmin.php");
               echo "<script>alert('Record has been added')</script>"; 
          } else {
               echo 'ERROR: '. mysqli_error($conn);
          }
     }



     //SEARCH
     if(isset($_POST['btnSrchTch'])){
            $tchID = mysqli_real_escape_string($conn,$_POST['tchID']);
            $searchedQuery = "SELECT * FROM tblteacher WHERE tchIDno = $tchID";
            $result = mysqli_query($conn,$searchedQuery);

            if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_array($result)){
                $tchID = $row['tchIDno'];
                $tchLast = $row['tchLastName'];
                $tchFirst = $row['tchFirstName'];
                $tchMiddle = $row['tchMiddleName'];
                
              }
            } else{
                echo "<script>alert('Teacher ID no. not found')</script>";
                header("Refresh:0;url=blogIndexAdmin.php");
              }
     }


 if(isset($_POST['btnUpdate'])){
                $tchID = $_POST['tchID'];
                $tchLast = $_POST['tchLastName'];
                $tchFirst = $_POST['tchFirstName'];
                $tchMiddle = $_POST['tchMiddleName'];
                

           $updateQuery = "UPDATE tblteacher SET  tchLastName = '".$tchLast."',tchMiddleName = '".$tchMiddle."'
           WHERE tchIDno = $tchID";

           $result = mysqli_query($conn, $updateQuery);


          if($result){
              echo "<script>alert('Your teacher record has been updated')</script>";
              header("Refresh:0;url=teacherEntryAdmin.php");

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
			<div class= "linkpage"><a class="linksEntry" href="studentEntryAdmin.php"> Student </a> - Teachers - <a class="linksEntry" href="subjectEntryAdmin.php">Subject</a><a class="linksE" href="blogIndexAdmin.php">&larr; Back</a></div>
             <article id="function">
                <form name = "myForm" id="tchRegistration" action = "teacherEntryAdmin.php" method="POST">
                       <label >Teacher ID#:</label><input type="text" id="postsTchID" name="tchID" placeholder="Type your Teacher ID Number" value="<?php echo $tchID; ?>"><input type="submit" name="btnSrchTch" value="SEARCH"><br><br>
                       <label >Last Name:</label><input type="text" id="postsTchLast" name="tchLastName" placeholder="Type your First Name" value="<?php echo $tchLast; ?>"><br><br>
                       <label >First Name:</label><input type="text" id="postsTchFirst" name="tchFirstName" placeholder="Type your Last Name" value="<?php echo $tchFirst; ?>"><br><br>
                       <label >Middle Name:</label><input type="text" id="postsTchMid" name="tchMiddleName" placeholder="Type your Middle Name" value="<?php echo $tchMiddle; ?>"><br><br>
                       
                       <input type="submit" name="btnInsert" class="buttonSub" value="Add Teacher">
                       <input type="submit" name="btnUpdate" class="buttonSub"  value="Update Teacher">

                     
               </form>
             </article>
		</div>
</section>

     <footer class="loginF" >
          <p>NBNHS, Copyright &copy; 2018</p>
     </footer>
  </body>
</html>
<?php ob_end_flush(); ?>