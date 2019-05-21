 $(document).ready(function(){

          $('#btnStudentSrch').click(function(event){
            event.preventDefault();
            var std = $('#stdQuery').val();
            var data = 'stdQuery='+std;

              $.ajax({
                  method:"POST",
                  url:"searchStdData.php?",
                  data: data,

                  success: function(data){
                    $('#stdResult').html(data);    
                    
                  }

              });
           });    

         

});