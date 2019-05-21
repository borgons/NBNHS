 $(document).ready(function(){

          $('#btnTeacherSrch').click(function(event){
            event.preventDefault();
            var tch = $('#tchQuery').val();
            var data = 'tchQuery='+tch;

              $.ajax({
                  method:"POST",
                  url:"searchTchData.php?",
                  data: data,

                  success: function(data){
                    $('#tchResult').html(data);    
                    
                  }

              });

           });    

         

});