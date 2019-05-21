$(document).ready(function(){
	$('#secondCalculate').click(function(){
		// =========SECOND SEMESTER==========
		//CORE
		//firstSubject Core
		var cvSfirstQt1Gr = $('#cSfirstQt1Gr').val();
		var cvSfirstQt2Gr = $('#cSfirstQt2Gr').val();
		var totSvfirstFGr = parseInt(cvSfirstQt1Gr) + parseInt(cvSfirstQt2Gr);
		var cvSfirstFNGr =  parseInt(totSvfirstFGr) / 2;
		$('#sfgSubOne').val(cvSfirstFNGr.toFixed());


		//secondSubject Core
		var cvSsecQt1Gr = $('#cSsecondQt1Gr').val();
		var cvSsecQt2Gr = $('#cSsecondQt2Gr').val();
		var totSvsecFGr = parseInt(cvSsecQt1Gr) + parseInt(cvSsecQt2Gr);
		var cvSsecFNGr =  parseInt(totSvsecFGr) / 2;
		$('#sfgSubTwo').val(cvSsecFNGr.toFixed());	

		//thirdSubject Core
		var cvSthirdQt1Gr = $('#cSthirdQt1Gr').val();
		var cvSthirdQt2Gr = $('#cSthirdQt2Gr').val();
		var totSvthirdFGr = parseInt(cvSthirdQt1Gr) + parseInt(cvSthirdQt2Gr);
		var cvSthirdFNGr =  parseInt(totSvthirdFGr) / 2;
		$('#sfgSubThree').val(cvSthirdFNGr.toFixed());

		//fourthSubject Core
		var cvSfourthQt1Gr = $('#cSfourthQt1Gr').val();
		var cvSfourthQt2Gr = $('#cSfourthQt2Gr').val();
		var totSvfourthFGr = parseInt(cvSfourthQt1Gr) + parseInt(cvSfourthQt2Gr);
		var cvSfourthFNGr =  parseInt(totSvfourthFGr) / 2;
		$('#sfgSubFour').val(cvSfourthFNGr.toFixed());


		//APPLIED
		//firstSubject Applied
		var cvSfifthQt1Gr = $('#cSfifthQt1Gr').val();
		var cvSfifthQt2Gr = $('#cSfifthQt2Gr').val();
		var totSvfifthFGr = parseInt(cvSfifthQt1Gr) + parseInt(cvSfifthQt2Gr);
		var cvSfifthFNGr =  parseInt(totSvfifthFGr) / 2;
		$('#sfgSubFive').val(cvSfifthFNGr.toFixed());

		//secondSubject Applied
		var cvSsixthQt1Gr = $('#cSsixthQt1Gr').val();
		var cvSsixthQt2Gr = $('#cSsixthQt2Gr').val();
		var totSvsixthFGr = parseInt(cvSsixthQt1Gr) + parseInt(cvSsixthQt2Gr);
		var cvSsixthFNGr =  parseInt(totSvsixthFGr) / 2;
		$('#sfgSubSix').val(cvSsixthFNGr.toFixed());

		//thirdSubject Applied
		var cvSseventhQt1Gr = $('#cSseventhQt1Gr').val();
		var cvSseventhQt2Gr = $('#cSseventhQt2Gr').val();
		var totSvseventhFGr = parseInt(cvSseventhQt1Gr) + parseInt(cvSseventhQt2Gr);
		var cvSseventhFNGr =  parseInt(totSvseventhFGr) / 2;
		$('#sfgSubSeven').val(cvSseventhFNGr.toFixed());

		//fourthSubject Applied
		var cvSeighthQt1Gr = $('#cSeighthQt1Gr').val();
		var cvSeighthQt2Gr = $('#cSeighthQt2Gr').val();
		var totSveighthFGr = parseInt(cvSeighthQt1Gr) + parseInt(cvSeighthQt2Gr);
		var cvSeighthFNGr =  parseInt(totSveighthFGr) / 2;
		$('#sfgSubEight').val(cvSeighthFNGr);

		//fifth Subject Applied
		var cvSninthQt1Gr = $('#cSninthQt1Gr').val();
		var cvSninthQt2Gr = $('#cSninthQt2Gr').val();
		var totSvninthFGr = parseInt(cvSninthQt1Gr) + parseInt(cvSninthQt2Gr);
		var cvSninthFNGr =  parseInt(totSvninthFGr) / 2;
		$('#sfgSubNine').val(cvSninthFNGr.toFixed());

		//GET TOTAL GRADE AND AVERAGE
		var sfirstFNGr = $('#sfgSubOne').val();
		var ssecondFNGr = $('#sfgSubTwo').val();
		var sthirdFNGr = $('#sfgSubThree').val();
		var sfourthFNGr = $('#sfgSubFour').val();
		var sfifthFNGr = $('#sfgSubFive').val(); 
		var ssixthFNGr = $('#sfgSubSix').val();
		var sseventhFNGr = $('#sfgSubSeven').val();
		var seighthFNGr = $('#sfgSubEight').val();
		var sninthFNGr = $('#sfgSubNine').val();

		var stotalFNGr = parseInt(sfirstFNGr) + parseInt(ssecondFNGr) + parseInt(sthirdFNGr) + parseInt(sfourthFNGr) + 
		 parseInt(sfifthFNGr) + parseInt(ssixthFNGr) + parseInt(sseventhFNGr) + parseInt(seighthFNGr) + parseInt(sninthFNGr);

		var secondSEMFNG =  parseInt(stotalFNGr) / 9;
		$('#SaverageGrade').val(secondSEMFNG);



	});

});