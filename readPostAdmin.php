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
     #delete Post
     if(isset($_POST['btnDelete'])){
          // Get form data
          $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

          $query = "DELETE FROM tbladminpost WHERE postID = {$delete_id}";

          if(mysqli_query($conn, $query)){
               header("Refresh:0;url=blogIndexAdmin.php");
               echo "<script>alert('Your Post has been deleted')</script>";
          } else {
               echo 'ERROR: '. mysqli_error($conn);
          }
     }

     ##Show Post
     //Get id
     $id = mysqli_real_escape_string($conn, $_GET['postID']);

     //query
     $query = 'SELECT * FROM tbladminpost WHERE postID = '.$id;

     //Get Result
     $result = mysqli_query($conn, $query);

     // Fetch Data
     $post = mysqli_fetch_assoc($result);

     // Free Result
     mysqli_free_result($result);

     // Close connection
     mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/schoolIcon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <!--Modals-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                        <li class="current"><a href="#">ANNOUNCEMENTS</a></li>
                        <li><a href="addPost.php">ADD POST</a></li>
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
			<div class= "linkpage">Read Post<a class="linksE" href="blogIndexAdmin.php">&larr; Back</a><a class="linksR" href="editPost.php?postID=<?php echo $post['postID'];?>">Edit Post</a></div>
				<article id="mainPostTitle">
						<span class = "postTitle"><?php echo $post['postTitle']; ?></span><br>
						<small><?php echo  $post['postWritten']; ?></small><br>
						<small><?php echo  $post['postDate']; ?></small>

				</article>
				<article id="content">
						<p class="para"><?php echo  $post['postBody']; ?></p>
                                   
           <span onclick="document.getElementById('id01').style.display='block'" class="some"><input type="submit"  value="Delete" class="btnDelete"></span>
                                
       </article>

		</div>
</section>

<!-- Modals part -->
<div class= "linkpageB">
     <div class="w3-container">


          <div id="id01" class="w3-modal">
               <div class="w3-modal-content">
               <header class="w3-container w3-red">
                  <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright">&times;</span>
                  <h2>Attention....</h2>


               </header>
                    <div class="w3-container">
                       <p>Do you want to remove this post?</p>
                       <form method ="POST" action="readPostAdmin.php">
                                        <input type="hidden" name="delete_id" value="<?php echo $post['postID']; ?>">
                                        <input type="submit" name="btnDelete" value="Delete" class="btnDelete">
                                   </form> 
                    </div>

               </div>
          </div>
     </div>
</div>

     <footer class="loginF" >
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
<?php ob_end_flush(); ?>

 
