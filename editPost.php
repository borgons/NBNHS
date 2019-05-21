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
// Editing  of Post
     if(isset($_POST['btnSubmit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$title = mysqli_real_escape_string($conn, $_POST['postTitle']);
		$body = mysqli_real_escape_string($conn, $_POST['postBody']);
		$written = mysqli_real_escape_string($conn,$_POST['postWritten']);
		$date = mysqli_real_escape_string($conn,$_POST['postDate']);

		$query = "UPDATE tbladminpost SET postTitle='$title', postDate='$date',postBody='$body', postWritten='$written'
		 WHERE postID = {$update_id}" ;

		if(mysqli_query($conn, $query)){
               header("Refresh:0;url=blogIndexAdmin.php");
			echo "<script>alert('Your Post has been updated')</script>";
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}


	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['postID']);

	// Create Query
	$query = 'SELECT * FROM tbladminpost WHERE postID = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
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
                        <li class="current"><a href="blogIndexAdmin.php">ANNOUNCEMENTS</a></li>
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
			<div class= "linkpage">Read Post &rarr; Edit Post<a class="linksE" href="readPostAdmin.php?postID=<?php echo  $post['postID']; ?> ">&larr; Back</a></div>
               <article id="function">
                    <form name = "myForm" onsubmit="return validateform()" action= "editPost.php" method="POST">
                             <label>Title:</label><input type="text" id="postsTitle" name="postTitle" placeholder="Type your Student ID Number" value="<?php echo $post['postTitle']; ?>"><br><br>
                             <label>Written By:</label><input type="text" id="postsAuthor" name="postWritten" placeholder="Type your First Name" value="<?php echo $post['postWritten']; ?>"><br><br>
                             <label>Body:</label><textarea id="postsBody" name="postBody" placeholder="Type your body Content"><?php echo $post['postBody']; ?></textarea><br><br>
                             <label>Date:</label><input type="text" id="postsDate" name="postDate" placeholder="Type your Date when you create a Post YYYY-MM-DD" value="<?php echo $post['postDate']; ?>"><br><br>
                             <input type="hidden" name="update_id" value="<?php echo $post['postID']; ?>">
                             <input type="submit" name="btnSubmit" class="buttonSub" value="Edit Post">
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
