 $(document).ready(function(){

          $('#btnFSubOne').click(function(event){
            event.preventDefault();
            $('#btnFSubOne').hide();
            var subFOne = $('#subFQuery').val();
            var data = 'subFQuery='+subFOne;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFOneResult').html(data);    
                    $("#btnFSubOne").show();
                  }

              });
           });    

         
         $('#btnFSubTwo').click(function(event){
           event.preventDefault();
            $('#btnFSubTwo').hide();
            var subFTwo = $('#subFTwoQuery').val();
            var data = 'subFTwoQuery='+subFTwo;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFTwoResult').html(data);    
                    $("#btnFSubTwo").show();
                  }

              });
           });    


         $('#btnFSubThree').click(function(event){
           event.preventDefault();
            $('#btnFSubThree').hide();
            var subFThree = $('#subFThreeQuery').val();
            var data = 'subFThreeQuery='+subFThree;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFThreeResult').html(data);    
                     $("#btnFSubThree").show();
                  }

              });
           });    


         $('#btnFSubFour').click(function(event){
           event.preventDefault();
            $('#btnFSubFour').hide();
            var subFFour = $('#subFFourQuery').val();
            var data = 'subFFourQuery='+subFFour;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFFourResult').html(data);    
                    $('#btnFSubFour').show();
                  }

              });
           });

          $('#btnFSubFive').click(function(event){
            event.preventDefault();
            $('#btnFSubFive').hide();
            var subFFive = $('#subFFiveQuery').val();
            var data = 'subFFiveQuery='+subFFive;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFFiveResult').html(data);    
                    $('#btnFSubFive').show()
                  }

              });
           });


          $('#btnFSubSix').click(function(event){
            event.preventDefault();
            $('#btnFSubSix').hide();
            var subFSix = $('#subFSixQuery').val();
            var data = 'subFSixQuery='+subFSix;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFSixResult').html(data);    
                     $('#btnFSubSix').show();
                  }

              });
           });

           $('#btnFSubSeven').click(function(event){
             event.preventDefault();
            $('#btnFSubSeven').hide();
            var subFSeven = $('#subFSevenQuery').val();
            var data = 'subFSevenQuery='+subFSeven;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFSevenResult').html(data);    
                      $('#btnFSubSeven').show();
                  }

              });
           });


           $('#btnFSubEight').click(function(event){
             event.preventDefault();
            $('#btnFSubEight').hide();
            var subFEight = $('#subFEightQuery').val();
            var data = 'subFEightQuery='+subFEight;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFEightResult').html(data);    
                    $('#btnFSubEight').show();
                  }

              });
           });


           $('#btnFSubNine').click(function(event){
             event.preventDefault();
            $('#btnFSubNine').hide();
            var subFNine = $('#subFNineQuery').val();
            var data = 'subFNineQuery='+subFNine;

              $.ajax({
                  method:"POST",
                  url:"searchFSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subFNineResult').html(data);    
                    $('#btnFSubNine').show();
                  }

              });
           });







});