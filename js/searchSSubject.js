 $(document).ready(function(){

          $('#btnSSubOne').click(function(event){
             event.preventDefault();
            var subSOne = $('#subSQuery').val();
            var data = 'subSQuery='+subSOne;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSOneResult').html(data);    
                    $("#btnSSubOne").show();
                  }

              });
           });    

         
         $('#btnSSubTwo').click(function(event){
           event.preventDefault();
            $('#btnSSubTwo').hide();
            var subSTwo = $('#subSTwoQuery').val();
            var data = 'subSTwoQuery='+subSTwo;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSTwoResult').html(data);    
                    $("#btnSSubTwo").show();
                  }

              });
           });    


         $('#btnSSubThree').click(function(event){
             event.preventDefault();
            $('#btnSSubThree').hide();
            var subSThree = $('#subSThreeQuery').val();
            var data = 'subSThreeQuery='+subSThree;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSThreeResult').html(data);    
                    $("#btnSSubThree").show();
                  }

              });
           });    


         $('#btnSSubFour').click(function(event){
             event.preventDefault();
            $('#btnSSubFour').hide();
            var subSFour = $('#subSFourQuery').val();
            var data = 'subSFourQuery='+subSFour;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSFourResult').html(data);    
                    $("#btnSSubFour").show();
                  }

              });
           });

          $('#btnSSubFive').click(function(event){
            event.preventDefault();
            $('#btnSSubFive').hide();
            var subSFive = $('#subSFiveQuery').val();
            var data = 'subSFiveQuery='+subSFive;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSFiveResult').html(data);    
                    $("#btnSSubFive").show();
                  }

              });
           });


          $('#btnSSubSix').click(function(event){
            event.preventDefault();
            $('#btnSSubSix').hide();
            var subSSix = $('#subSSixQuery').val();
            var data = 'subSSixQuery='+subSSix;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSSixResult').html(data);    
                     $("#btnSSubSix").show();
                  }

              });
           });

           $('#btnSSubSeven').click(function(event){
             event.preventDefault();
            $('#btnSSubSeven').hide();
            var subSSeven = $('#subSSevenQuery').val();
            var data = 'subSSevenQuery='+subSSeven;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSSevenResult').html(data);    
                    $("#btnSSubSeven").show();
                  }

              });
           });


           $('#btnSSubEight').click(function(event){
             event.preventDefault();
            $('#btnSSubEight').hide();
            var subSEight = $('#subSEightQuery').val();
            var data = 'subSEightQuery='+subSEight;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSEightResult').html(data);    
                    $('#btnSSubEight').show();
                  }

              });
           });


           $('#btnSSubNine').click(function(event){
             event.preventDefault();
            $('#btnSSubNine').hide();
            var subSNine = $('#subSNineQuery').val();
            var data = 'subSNineQuery='+subSNine;

              $.ajax({
                  method:"POST",
                  url:"searchSSubData.php?",
                  data: data,

                  success: function(data){
                    $('#subSNineResult').html(data);    
                    $('#btnSSubNine').show();
                  }

              });
           });







});