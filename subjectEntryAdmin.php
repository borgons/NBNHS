<?php ob_start(); ?>
<?php
     session_start();
     require('includes/connection.php');

$subjID = "";
$subjTitle = "";

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
          $subjID = mysqli_real_escape_string($conn, $_POST['subjID']);
          $subjTitle = mysqli_real_escape_string($conn, $_POST['subjTitle']);

          $query = "INSERT INTO tblsubject(subCode, subTitle) VALUES('$subjID', '$subjTitle')";

          if(mysqli_query($conn, $query)){
               header("Refresh:2;url=subjectEntryAdmin.php");
               echo "<script>alert('Record has been added')</script>"; 
          } else {
               echo 'ERROR: '. mysqli_error($conn);
          }
     }


     if(isset($_POST['btnSearchSub'])){
            $subjID = mysqli_real_escape_string($conn,$_POST['subjID']);
            $searchedQuery = "SELECT * FROM tblsubject WHERE subCode = $subjID";
            $result = mysqli_query($conn,$searchedQuery);

            if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_array($result)){
                $subjID = $row['subCode'];
                $subjTitle = $row['subTitle'];
              }
            } else{
                echo "<script>alert('Subject Code not found')</script>";
                header("Refresh:0;url=subjectEntryAdmin.php");
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
			<div class= "linkpage"><a class="linksEntry" href="studentEntryAdmin.php"> Student </a> - <a class="linksEntry" href="teacherEntryAdmin.php"> Teachers</a> - Subject <a class="linksE" href="blogIndexAdmin.php">&larr; Back</a></div>
               <article id="function">
                    <form name = "myForm" id="subjectRegistration" action= "subjectEntryAdmin.php" method="POST">
                           <label >Subject ID#:</label><input type="text" id="postsSubjID" name="subjID" placeholder="Type your Subject ID Number" value="<?php echo $subjID; ?>"><input type="submit" name="btnSearchSub" value="SEARCH"><br><br>
                           <label >Title:</label><input type="text" id="postsSubjTitle" name="subjTitle" placeholder="Type your Title" value="<?php echo $subjTitle; ?>"><br><br>
                           
                           <input type="submit" name="btnInsert" class="buttonSub" value="Add Subject">
                           <input type="submit" name="btnUpdate" class="buttonSub"  value="Update Subject">
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