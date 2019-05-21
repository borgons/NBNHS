 $(document).ready(function(){

          $('#btnGradeSrch').click(function(event){
            event.preventDefault();
            var gr = $('#grdQuery').val();
            var data = 'grdQuery='+gr;

              $.ajax({
                  method:"POST",
                  url:"searchGrade.php?",
                  data: data,

                  success: function(data){
                    $('#stdGrResult').html(data);    
                    
                  }

              });

           });    

         

});