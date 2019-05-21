$(document).ready(function(){
	$('#stdRegistration').validate({
		rules:{
			stdIDs:{
				required:true,
				maxlength:12
			},

			stdLastName:{
				required:false
			},

			stdFirstName:{
				required:false
			},

			stdMiddleName:{
				required:false
			},

			stdBirthDate:{
				required:false
			},

			stdAge:{
				required:false
			},

			stdSex:{
				required:false,
				maxlength:1
			},

			stdGrade:{
				required:false,
				max:12
			},

			stdSection:{
				required:false
			},

			stdSchoolYear:{
				required:false
			}
		},
			
		messages:{
			stdIDs:{
				required:"ID# is required"	
			},
			stdLastName:{
				required:"Last Name is required"
			},

			stdFirstName:{
				required:"First Name is required"
			},

			stdMiddleName:{
				required:"Middle Name is required"
			},

			stdBirthDate:{
				required:"Birthdate is required. Follow the format YYYY-MM-DD"
			},

			stdAge:{
				required:"Age is required"
			},

			stdSex:{
				required:"Sex is required",
				maxlength:"Press F for Female or M for Male"
			},

			stdGrade:{
				required:"Grade is required",
				max:"Type 1 to 12 Only"
			},

			stdSection:{
				required:"Section is required"
			},

			stdSchoolYear:{
				required:"School Year is required"
			}

		}





	});
	
//========================TEACHERS VALIDATIOn ===============?
$('#tchRegistration').validate({
		rules:{
			tchID:{
				required:true,
				maxlength:12
			},

			tchLastName:{
				required:false
			},

			tchFirstName:{
				required:false
			},

			tchMiddleName:{
				required:false
			}

			
		},
			
		messages:{
			tchID:{
				required:"ID# is required"	
			},
			tchLastName:{
				required:"Last Name is required"
			},

			tchFirstName:{
				required:"First Name is required"
			},

			tchMiddleName:{
				required:"Middle Name is required"
			}

		}





	});

//========================Subject VALIDATIOn ===============?
$('#subjectRegistration').validate({
		rules:{
			subjID:{
				required:true,
				maxlength:6
			},

			subjTitle:{
				required:false
			}

			
		},
			
		messages:{
			subjID:{
				required:"ID# is required"	
			},
			subjTitle:{
				required:"Last Name is required"
			}

		}




	});


//========================TEACHERS VALIDATIOn ===============?
$('#searchInfo').validate({
		rules:{
			stdID:{
				required:true,
				maxlength:12
			},

			tchID:{
				required:true,
				maxlength:12
			}

			
		},
			
		messages:{
			stdID:{
				required:"Student ID# is required"	
			},
			tchID:{
				required:"Teacher ID# is required"	
			},

		}




	});





























});