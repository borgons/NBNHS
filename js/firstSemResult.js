$(document).ready(function(){
	$('#firstCalculate').click(function(){
		// =========FIRST SEMESTER==========
		//CORE
		//firstSubject Core
		var cvfirstQt1Gr = $('#cfirstQt1Gr').val();
		var cvfirstQt2Gr = $('#cfirstQt2Gr').val();
		var totvfirstFGr = parseInt(cvfirstQt1Gr) + parseInt(cvfirstQt2Gr);
		var cvfirstFNGr =  parseInt(totvfirstFGr) / 2;
		$('#fgSubOne').val(cvfirstFNGr.toFixed());

		//secondSubject Core
		var cvsecQt1Gr = $('#csecondQt1Gr').val();
		var cvsecQt2Gr = $('#csecondQt2Gr').val();
		var totvsecFGr = parseInt(cvsecQt1Gr) + parseInt(cvsecQt2Gr);
		var cvsecFNGr =  parseInt(totvsecFGr) / 2;
		$('#fgSubTwo').val(cvsecFNGr.toFixed());

		//thirdSubject Core
		var cvthirdQt1Gr = $('#cthirdQt1Gr').val();
		var cvthirdQt2Gr = $('#cthirdQt2Gr').val();
		var totvthirdFGr = parseInt(cvthirdQt1Gr) + parseInt(cvthirdQt2Gr);
		var cvthirdFNGr =  parseInt(totvthirdFGr) / 2;
		$('#fgSubThree').val(cvthirdFNGr.toFixed());


		//fourthSubject Core
		var cvfourthQt1Gr = $('#cfourthQt1Gr').val();
		var cvfourthQt2Gr = $('#cfourthQt2Gr').val();
		var totvfourthFGr = parseInt(cvfourthQt1Gr) + parseInt(cvfourthQt2Gr);
		var cvfourthFNGr =  parseInt(totvfourthFGr) / 2;
		$('#fgSubFour').val(cvfourthFNGr.toFixed());

		//APPLIED
		//firstSubject Applied
		var cvfifthQt1Gr = $('#cfifthQt1Gr').val();
		var cvfifthQt2Gr = $('#cfifthQt2Gr').val();
		var totvfifthFGr = parseInt(cvfifthQt1Gr) + parseInt(cvfifthQt2Gr);
		var cvfifthFNGr =  parseInt(totvfifthFGr) / 2;
		$('#fgSubFive').val(cvfifthFNGr.toFixed());


		//secondSubject Applied
		var cvsixthQt1Gr = $('#csixthQt1Gr').val();
		var cvsixthQt2Gr = $('#csixthQt2Gr').val();
		var totvsixthFGr = parseInt(cvsixthQt1Gr) + parseInt(cvsixthQt2Gr);
		var cvsixthFNGr =  parseInt(totvsixthFGr) / 2;
		$('#fgSubSix').val(cvsixthFNGr.toFixed());

		//thirdSubject Applied
		var cvseventhQt1Gr = $('#cseventhQt1Gr').val();
		var cvseventhQt2Gr = $('#cseventhQt2Gr').val();
		var totvseventhFGr = parseInt(cvseventhQt1Gr) + parseInt(cvseventhQt2Gr);
		var cvseventhFNGr =  parseInt(totvseventhFGr) / 2;
		$('#fgSubSeven').val(cvseventhFNGr.toFixed());

		//fourthSubject Applied
		var cveighthQt1Gr = $('#ceighthQt1Gr').val();
		var cveighthQt2Gr = $('#ceighthQt2Gr').val();
		var totveighthFGr = parseInt(cveighthQt1Gr) + parseInt(cveighthQt2Gr);
		var cveighthFNGr =  parseInt(totveighthFGr) / 2;
		$('#fgSubEight').val(cveighthFNGr.toFixed());

		//fifthSubject Applied
		var cvninthQt1Gr = $('#cninthQt1Gr').val();
		var cvninthQt2Gr = $('#cninthQt2Gr').val();
		var totvninthFGr = parseInt(cvninthQt1Gr) + parseInt(cvninthQt2Gr);
		var cvninthFNGr =  parseInt(totvninthFGr) / 2;
		$('#fgSubNine').val(cvninthFNGr.toFixed());


		//GET TOTAL GRADE AND AVERAGE
		var firstFNGr = $('#fgSubOne').val();
		var secondFNGr = $('#fgSubTwo').val();
		var thirdFNGr = $('#fgSubThree').val();
		var fourthFNGr = $('#fgSubFour').val();
		var fifthFNGr = $('#fgSubFive').val(); 
		var sixthFNGr = $('#fgSubSix').val();
		var seventhFNGr = $('#fgSubSeven').val();
		var eighthFNGr = $('#fgSubEight').val();
		var ninthFNGr = $('#fgSubNine').val();

		var totalFNGr = parseInt(firstFNGr) + parseInt(secondFNGr) + parseInt(thirdFNGr) + parseInt(fourthFNGr) + 
		 parseInt(fifthFNGr) + parseInt(sixthFNGr) + parseInt(seventhFNGr) + parseInt(eighthFNGr) + parseInt(ninthFNGr);

		var firstSEMFNG =  parseInt(totalFNGr) / 9;

		$('#FaverageGrade').val(firstSEMFNG);

		
	});

});