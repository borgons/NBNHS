<?php 
  if(isset($_GET['accept-cookies'])){
    setcookie('accept-cookies','+v2\>%y"]e/ctJ8nG&5n^&ELaV4^rhQ/Fa!%jddy!-8<)`DhSyKC39c4b5149bc883cb8470b48f85483d84',time()+315569250 , '/', null, null,true);
    header('Location:./');
  }
?>

<?php

      require('includes/connection.php');

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
    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="js/global.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){
              $('.menu').click(function(){
                    $('ul').toggleClass('active');
              })
         })
    </script>
    <title>ABOUT THE SCHOOL | New Bataan National High School</title>
  </head>
  <body>
<!--   COOKIES -->
<?php 
  if(!isset($_COOKIE['accept-cookies'])){
?>    
   <div class = "cookie-banner"> 
      <div class = "container">
        <br>
          <b>PRIVACY POLICY</b>
          <p>This website uses cookies to ensure you get the best experience on our website. </p>
          <a href ="?accept-cookies" class ="button"> Ok, Continue</a>
     
    </div>
  </div>
<?php
} 
?>    
<!--HEADER -->
    <header>
       <div class="container">
          <div id="branding1">
               <img class="SL" src="img/schoolLogo.png" alt="schoolLogo">
               <img class="DL" src="img/depEd.png" alt="schoolLogo">
          </div>
       </div>
    </header>
<!--NAV -->
    <nav>
         <div class ="toggle">
             <i class="fas fa-bars menu" aria-hidden="true"></i>
         </div>
              <div class="container">
                   <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li class="current"><a href="#">ANNOUNCEMENTS</a></li>
                        <li><a href="grade.php">GRADES</a></li>
                   </ul>
              </div>
    </nav>

<!--Main Content -->
     <section id = "main">
	          <div class="container">
				<div class ="linkpage">Show Post &rarr; Read Post <a class="return" href="blogIndex.php">&larr; Back</a></div>
                    <article id="mainPostTitle">
                              <span class = "postTitle"><?php echo $post['postTitle']; ?></span><br>
                              <small><?php echo  $post['postWritten']; ?></small><br>
                              <small><?php echo  $post['postDate']; ?></small>

                    </article>
                    <article id="content">
                              <p class="para"><?php echo  $post['postBody']; ?></p>
                   </article>


	          </div>
     </section>

<!--footer -->
     <footer>
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?> </p>
     </footer>
  </body>
</html>
