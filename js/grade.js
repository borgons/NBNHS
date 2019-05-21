$(document).ready(function(){
		 var count = 1;
		 $('#add').click(function(){
		  count = count + 1;
		  var html_code = "<tr id='row"+count+"'>";
		   html_code += "<td contenteditable='true' class='valuesSub'></td>";
		   html_code += "<td contenteditable='true' class='valuesRate'></td>";
		   html_code += "<td contenteditable='true' class='valuesRate'></td>";
		   html_code += "<td contenteditable='true' class='valuesFG' ></td>";
		   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
		   html_code += "</tr>";  
		   $('#crud_table').append(html_code);
	  	});
 });