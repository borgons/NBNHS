<?php
     $dateReg = date("Y/m/d");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/schoolIcon.png">

    <title>Admin Page | New Bataan National High School</title>

  </head>
  <body>

<!--Container -->
<section id = "main">
		<div class="container">
			<div class= "linkpage">Register Account<a class="linksE" href="adminLogIn.php">&larr; Back</a></div>
               <article id="function">
                    <form name = "myForm" onsubmit="return Validate()" action= "insert.php" method="POST">
                         <div id = "adminID_div">
                             <label>ID no:</label>
                             <input type="text" id="adminID" name="adminIDs" placeholder="Type your admin ID Number" class="textInput"><br><br>
                        </div>
                        <div id = "adminFirstName_div">
                             <label>First Name:</label>
                             <input type="text" id="adminFirst" name="adminFirsts" placeholder="Type your First Name" class="textInput"><br><br>
                        </div>
                        <div id = "adminLastName_div">
                             <label>Last Name:</label>
                             <input type ="text"id="adminLast" name="adminLasts" placeholder="Type your body Last Name" class="textInput"><br><br>
                        </div>
                        <div id = "adminRole_div">
                             <label>Role:</label>
                             <input type="text" id="adminRole" name="adminRoles" placeholder="Type your Role" class="textInput"><br><br>
                        </div><hr>
                        <div id = "adminPass_div">
                             <label>Password:</label>
                             <input type="password" id="adminPass" name="adminPasss" placeholder="Type your password" class="textInput"><br><br>
                        </div>
                        <div id = "adminConfPass_div">
                             <label>Confirm Password:</label>
                             <input type="password" id="adminConPass" name="adminConPasss" placeholder="Type your confirm password" class="textInput"><br><br>
                        </div>
                         <!--Date Registered --> <input type="hidden" name="adminDateReg" value="<?php echo date("Y/m/d");?>">
                              <div id="adminForm_Error"></div>
                             <input type="submit" name="btnSubmit" class="buttonSub" value="Register Now">
                   </form>
               </article>
		</div>
</section>

     <footer class="loginF" >
          <p>NBNHS, Copyright &copy; 2018</p>
     </footer>
  </body>
</html>

<script type="text/javascript">
//SELECTING ALL TEXT ELEMENTS
var admin_VID = document.forms['myForm']['adminIDs'];
var admin_VFirstName= document.forms['myForm']['adminFirsts'];
var admin_VLastName = document.forms['myForm']['adminLasts'];
var admin_VRoles = document.forms['myForm']['adminRoles'];
var admin_VPass = document.forms['myForm']['adminPasss'];
var admin_VConfPass = document.forms['myForm']['adminConPasss'];
//SELECTING ALL ERROR DISPLAY ELEMENTS
var admin_VIDError = document.getElementById('adminForm_Error');
var admin_VFirstNameError = document.getElementById('adminForm_Error');
var admin_VLastNameError = document.getElementById('adminForm_Error');
var admin_VRolesError = document.getElementById('adminForm_Error');
var admin_VPassError = document.getElementById('adminForm_Error');
var admin_VConPassError = document.getElementById('adminForm_Error');
// SETTING ADD EVENT LISTENERS
admin_VID.addEventListener('blur',adminIDVerify ,true);
admin_VFirstName.addEventListener('blur',adminFirstVerify ,true);
admin_VLastName.addEventListener('blur',adminLastVerify ,true);
admin_VRoles.addEventListener('blur',adminRoleVerify ,true);
admin_VPass.addEventListener('blur',adminPassVerify ,true);
admin_VConfPass.addEventListener('blur',adminConfPassVerify ,true);
// VALIDATION function

	function Validate(){
          //adminID Validation
		if (admin_VID.value == ""){
			admin_VID.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Admin ID Number is required";
			return false;
		}

		if (admin_VID.value.length < 6){
			admin_VID.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Admin ID Number must be at 6 digits";
			return false;
		}

          if (admin_VID.value.length > 6){
			admin_VID.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Admin ID Number must be at 6 digits";
			return false;
		}

          //First name
          if (admin_VFirstName.value == ""){
			admin_VFirstName.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "First Name is required";
			return false;
		}

          //Last name
          if (admin_VLastName.value == ""){
			admin_VLastName.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Last Name is required";
			return false;
		}

          //Role
          if (admin_VRoles.value == ""){
			admin_VRoles.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Role is required";
			return false;
		}

          //Password
          if (admin_VPass.value == ""){
			admin_VPass.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Password is required";
			return false;
		}

          //Password Confirm
          if (admin_VConfPass.value == ""){
			admin_VConfPass.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Confirm Password must be matched!!!";
			return false;
		}

          //Password & Confirm Password matched
          if (admin_VPass.value != admin_VConfPass.value){
			admin_VConfPass.style.border = "1px solid red";
			document.getElementById('adminForm_Error').style.color = "red";
			adminForm_Error.textContent = "Confirm Password must be matched!!!!";
			return false;
		}







	}

//Event handler functions
		function adminIDVerify() {
			if (admin_VID.value != ""){
				admin_VID.style.border = "1px solid green ";
				document.getElementById('adminID_div').style.color = "";
				adminForm_Error.innerHTML = "";
				return true;
			}
		}

          function adminFirstVerify() {
			if (admin_VFirstName.value != ""){
				admin_VFirstName.style.border = "1px solid green ";
				document.getElementById('adminID_div').style.color = "";
				adminForm_Error.innerHTML = "";
				return true;
			}
		}

          function adminLastVerify() {
			if (admin_VLastName.value != ""){
				admin_VLastName.style.border = "1px solid green ";
				document.getElementById('adminID_div').style.color = "";
				adminForm_Error.innerHTML = "";
				return true;
			}
		}

          function adminRoleVerify() {
			if (admin_VRoles.value != ""){
				admin_VRoles.style.border = "1px solid green ";
				document.getElementById('adminID_div').style.color = "";
				adminForm_Error.innerHTML = "";
				return true;
			}
		}

          function adminPassVerify() {
			if (admin_VPass.value != ""){
				admin_VPass.style.border = "1px solid green ";
				document.getElementById('adminID_div').style.color = "";
				adminForm_Error.innerHTML = "";
				return true;
			}
		}

          function adminPassVerify() {
			if (admin_VPass.value === admin_VConfPass.value){
				admin_VPass.style.border = "1px solid green ";
				document.getElementById('adminID_div').style.color = "";
				adminForm_Error.innerHTML = "";
				return true;
			}
		}



</script>
