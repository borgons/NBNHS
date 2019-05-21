<?php ob_start(); ?>
<?php
     session_start();
     require('includes/connection.php');

     //Session
     if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=adminLogIn.php");
	}

     // Inserting of Post
     if(isset($_POST['btnSubmit'])){
          // Get form data
          $title = mysqli_real_escape_string($conn, $_POST['postTitle']);
          $body = mysqli_real_escape_string($conn, $_POST['postBody']);
          $written = mysqli_real_escape_string($conn,$_POST['postWritten']);
          $date = mysqli_real_escape_string($conn,$_POST['postDate']);

          $query = "INSERT INTO tbladminpost(postTitle, postWritten,postBody,postDate ) VALUES('$title', '$written', '$body', '$date')";

          if(mysqli_query($conn, $query)){
               header("Refresh:1;url=blogIndexAdmin.php");
               echo "<script>alert('Your Post has been saved')</script>";
          } else {
               echo 'ERROR: '. mysqli_error($conn);
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
                        <li class="current"><a href="#">ADD POST</a></li>
                        <li><a href="studentEntryAdmin.php">ENTRY</a></li>
                        <li><a href="gradeAdmin.php">GRADES</a></li>
                        <li class ="adminuser"><?php  echo 'WELCOME '.$_SESSION['txtIDno'];?></li>
                        <li><a href="logout.php">LOG-OUT</a></li>
                   </ul>
              </div>
    </nav>
<!--Container -->
<section id = "main">
		<div class="container">
			<div class= "linkpage">Show Post &rarr; Add Post<a class="linksE" href="blogIndexAdmin.php">&larr; Back</a></div>
               <article id="function">
                    <form name = "myForm" onsubmit="return validateform()" action= "addPost.php" method="POST">
                             <label >Title:</label><input type="text" id="postsTitle" name="postTitle" placeholder="Type your Student ID Number"><br><br>
                             <label >Written By:</label><input type="text" id="postsAuthor" name="postWritten" placeholder="Type your First Name"><br><br>
                             <label >Body:</label><textarea id="postsBody" name="postBody" placeholder="Type your body Content"></textarea><br><br>
                             <label >Date:</label><input type="text" id="postsDate" name="postDate" placeholder="Type your Date when you create a Post YYYY-MM-DD"><br><br>
                             <input type="submit" name="btnSubmit" class="buttonSub" value="Add Post">
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
