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
		if (admin_VID.value == ""){
			admin_VID.style.border = "1px solid red";
			document.getElementById('adminID_div').style.color = "red";
			adminForm_Error.textContent = "admin ID Number is required";
			admin_VID.focus();
			return false;
		}

		if (admin_VID.value.length < 8){
			admin_VID.style.border = "1px solid red";
			document.getElementById('adminID_div').style.color = "red";
			adminForm_Error.textContent = "admin ID Number must be at < 8";
			admin_VID.focus();
			return false;
		}

	}

//Event handler functions
		function adminIDVerify() {
			if (admin_VID.value != ""){
				admin_VID.style.border = "1px solid #5e6e66";
				document.getElementById('adminID_div').style.color = "#5e6e66";
				adminForm_Error.innerHTML = ""
				admin_VID.focus();
				return true;
			}


		}


