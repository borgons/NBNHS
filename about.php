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
    <link rel="icon" href="img/schoolIcon.png">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="js/global.js"></script>
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
                   <li class="current"><a href="#">ABOUT</a></li>
                   <li><a href="gallery.php">GALLERY</a></li>
                   <li><a href="blogIndex.php">ANNOUNCEMENTS</a></li>
                   <li><a href="grade.php">GRADES</a></li>
              </ul>
         </div>
    </nav>

<!--Main Content -->
     <section id = "main">
          <div class="container">
               <article id="main-col">
                    <h1 class="page-title">Vision, Mission  and Core Values of <br>New Bataan National High School</h1>
                    <span class="HLvm">Vision</span>
                    <p class ="vIndent">We dream of Filipino who passionately love their country and whose values and
                       competencies enable them to realize their full potential and contribute meaningfully
                       to building the nation. As a learner-centered public institution, the Department of Education
                       continously improves itself to better serve its stakeholders
                    </p>
                    <span class="HLvm">Mission</span>
                    <p class ="vIndent">To protect and promote the right of every Filipino to quality, equitable, culture-based
                       and complete basic eduation where:
                       <ul>
                            <li class ="vIndent">Students learn in a child-friendly, gender-sensitive, safe, and motivating environment</li>
                            <li class ="vIndent">Teachers facilitate learning and constantly nurture every learner</li>
                            <li class ="vIndent">Administrators and staff as stewards of the institution ensure an enabling
                            and supportive environment for affective learning to happen.</li>
                            <li class ="vIndent">Family, community and other stakeholders are actively engaged and share responsibility
                            for developing life-long learners</li>
                       </ul>
                    </p>
                    <span class="HLvm">Core Values</span>
                    <ul>
                         <li>Maka-Diyos</li>
                         <li>Maka-tao</li>
                         <li>Makakalikasan</li>
                         <li>Makabansa</li>
                    </ul>
                    <span class="HLvm">School Video</span><br>
                    <iframe width="400" height="325" src="https://www.youtube.com/embed/hX9DRl1rqB4">
                    </iframe>
               </article>
          </div>
     </section>

     <footer>
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
