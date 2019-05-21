<?php ob_start(); ?>
<?php
	 session_start();
	 require('includes/connection.php');
     //
	if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=adminLogIn.php");
	}

	//query
	$query = 'SELECT * FROM tbladminpost ORDER BY postDate DESC';

	//Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result,  MYSQLI_ASSOC);

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
               <div class= "linkpage">Show Post </div>
               <?php foreach($posts as $post) : ?>
                    <article id="maintitle">
                              <a class = "btnShowPost" href="readPostAdmin.php?postID=<?php echo  $post['postID']; ?> ">Read Post</a>
                              <span class = "postTitle"><?php echo $post['postTitle']; ?></span><br>
                              <small><?php echo  $post['postWritten']; ?></small><br>
                              <small><?php echo  $post['postDate'] ?></small>
                    </article>
               <?php endforeach; ?>
          </div>
</section>


     <footer class="loginF">
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
<?php ob_end_flush(); ?>
