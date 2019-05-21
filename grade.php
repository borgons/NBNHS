<?php 
  if(isset($_GET['accept-cookies'])){
    setcookie('accept-cookies','+v2\>%y"]e/ctJ8nG&5n^&ELaV4^rhQ/Fa!%jddy!-8<)`DhSyKC39c4b5149bc883cb8470b48f85483d84',time()+315569250 , '/', null, null,true);
    header('Location:./');
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
     <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="js/global.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/searchGrade.js"></script>

    <script type="text/javascript">
         $(document).ready(function(){
              $('.menu').click(function(){
                    $('ul').toggleClass('active');
              })
         })
    </script>
    <title>GRADES</title>
  </head>
  <body>
<!--   COOKIES -->
<?php 
  if(!isset($_COOKIE['accept-cookies'])){
?>    
   <div class = "cookie-banner"> 
      <div class = "container">
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
                        <li><a href="blogIndex.php">ANNOUNCEMENTS</a></li>
                        <li class="current"><a href="#">GRADES</a></li>
                   </ul>
              </div>
    </nav>

<!--Main Content -->
     <section id = "main">
          <div class="container">
               <article id="main-col">
                    <h1 class="page-title">Please type your Student ID No. to Show your Grades</h1>
                    Learner Reference No# : <input type="text" id="grdQuery" name="searchStdID" class="grdLast" maxlength="12">
                    <input type="submit"   value="SEARCH" id="btnGradeSrch"><br>
                    <p align = "center">If the credentials is incorrect try to ask the admin or web developer...</p>

                   <div id="stdGrResult"></div> <br>
                   
               </article>
          </div>
     </section>













     <footer>
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
