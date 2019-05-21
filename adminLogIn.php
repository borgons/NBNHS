<?php 
 ob_start(); 
	session_start();

if(isset($_SESSION['txtIDno'])){
	
		//echo "<script>alert('You are not Logging-Out.')</script>";
		header("Location:blogIndexAdmin.php");
	}	


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/schoolIcon.png">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <!--Modals-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Welcome to New Bataan National High School</title>
    <style>
		input[type=text] {
			width: 60%;
			padding: 12px 20px;
			margin: 11px 70;
			box-sizing: border-box;
		}

		input[type=password] {
			width: 60%;
			padding: 12px 20px;
			margin: 11px 70;
			margin-bottom:30px;
			box-sizing: border-box;

		}
		#stdID{
			margin-left:80px;
		}

		#stdPass{
			margin-left:80px;
		}

		label{

			font-family:Arial, Sans-serif;
			font-size:20px;
			padding-left:80px;
		}
		.button {
			border-radius:10px;
			background-color: #8fbafc;
			border: none;
			color: #000;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin-left:55%;
			cursor: pointer;
			}
		.button:hover{
			font-weight:bold;
			color:#fff;
			background-color: #04265b;
		}
		a{
			text-decoration:none;
			font-size:15px;
			padding-left:100px;
			font-family:arial;

		}


		a:visited{
			color:green;
		}

		a:hover{
			text-decoration:underline;
			color:red;
		}

		#mainLog{
			height:85px;
			width:400px;
			background-color:#093172;
			margin:auto;
			margin-top:2%;



		}

		.mainLogTitle{
			font-family:Arial;
			font-size:25px;
			color:#fff;
			text-align:center;
			padding:20px;
			line-height:43px;
		}
</style>
  </head>
  <body>

       <div id="headerLogo">
           <img class="SLlogin" src="img/schoolLogo.png" ><span class = "schoolName">Admin for Teachers</span>
       </div>




<!--ShowCase -->
<section id = "main">
	<div class="container">
		<article id="mainLog-in">
			<form action = "welcome.php" method ="POST">
                  <label>Please Log-In</label><br><br>
			    <label>ID#</label><br>
			    <input type="text" id="stdID" name="txtIDno" placeholder="Type your ID number">
			    <br><br>
			    <label>Password</label>
			    <input type="password" id="stdPass" name="txtPass" placeholder="Type your password">
				<input type="hidden" name="authDateTime" >
			 <br><input type="submit" name="btnLogin" class="button" value="Log-In">
			</form>
			  <br>
			 <span class="some"> <a href="register.php">Click here to REGISTER</a></span>
			 <br><span onclick="document.getElementById('id01').style.display='block'" class="some"><a href="#">Forgot a password click here</a><br><br></span>
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
                       <p>If you want to recover your account, Please type your admin ID number before you proceed.</p>
                       <form action="recover.php" method="POST">
                            <input type="text" id="stdID" name="txtadminID" placeholder="Type your ID number">
                            <input type="submit" name="btnConfirm" class="buttonConfirm" value="Confirm">
                       </form>
                    </div>

               </div>
          </div>
     </div>
</div>






     <footer class = loginF>
          <p>NBNHS, Copyright &copy; <?php echo date("Y");?></p>
     </footer>
  </body>
</html>
<?php ob_end_flush(); ?>
