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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/schoolIcon.png">
    <link rel="stylesheet" href="css/lightbox.min.css" type="text/css">
    <script type = "text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
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
    <title> SCHOOL GALLERY | New Bataan National High School</title>
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
     			    <li class="current"><a href="#">GALLERY</a></li>
                        <li><a href="blogIndex.php">ANNOUNCEMENTS</a></li>
                        <li><a href="grade.php">GRADES</a></li>
                   </ul>
              </div>
    </nav>

<!--Main Content -->
     <section id = "main">
          <div class="container">
               <article id="main-col">
                    <h1 class="page-title">School Gallery</h1>
                    <div class="HLg">Awards and Recognitions</div>
                    <a href = "img/pic1.jpg" data-lightbox="mygallery"><img class="pic" src = "img/pic1.jpg" height="150" width="200"></a>
                    <a href = "img/pic2.jpg" data-lightbox="mygallery"><img class="pic" src = "img/pic2.jpg" height="150" width="200"></a>
                    <a href = "img/pic4.jpg" data-lightbox="mygallery"><img class="pic" src = "img/pic4.jpg" height="150" width="200"></a>
                    <a href = "img/pic5.jpg" data-lightbox="mygallery"><img class="pic" src = "img/pic5.jpg" height="150" width="200"></a>
                    <a href = "img/pic6.jpg" data-lightbox="mygallery"><img class="pic" src = "img/pic6.jpg" height="150" width="200"></a>
                    <a href = "img/pic9.jpg" data-lightbox="mygallery"><img class="pic" src = "img/pic9.jpg" height="150" width="200"></a>
               </article>
          </div>
     </section>

     <footer>
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
