$(document).ready(function(){

    //Form processing for adding staff
    $("#demo1-upload").on("submit", function (e) {
        

        var dataString = $(this).serialize();
        

         $.ajax({
                url: "../controllers/insert-staff.php",
                data: dataString,
                
                encode: true,
                type: "POST",
                success: function () {
                  
                  $("#demo1-uploa").html("<div id='message'></div>");
                  $("#message")
                    .html("<h2>Contact Form Submitted!</h2>")
                    .append("<p>We will be in touch soon.</p>")
                    .hide()
                    .fadeIn(1500, function () {
                      
                  });
                  
                }
                
          }); 
          console.log(dataString); 
          //Make sure appropriate data is submitted before triggering alert 
          if(dataString != "f-name=&m-name=&l-name=&email=&address=&mobileno=&finish="){
            setTimeout(function () {
              swal({
                  title: "Staff Added Successfully!",
                  text: "New staff added!",
                  icon: "success",
                  button: "OK",
              });
            }, 1500);
            $('#demo1-upload').trigger("reset");
          }
          e.preventDefault();
    });

    //Form processing for records
    $("#record").on("submit", function (e) {
        

      var dataString = $(this).serialize();
      

       $.ajax({
              url: "../controllers/process-records.php",
              data: dataString,
              
              encode: true,
              type: "POST",
              success: function () {
                
                $("#recor").html("<div id='message'></div>");
                $("#message")
                  .html("<h2>Contact Form Submitted!</h2>")
                  .append("<p>We will be in touch soon.</p>")
                  .hide()
                  .fadeIn(1500, function () {
                    
                });
                
              }
              
        });   
        
        if(dataString != "finish="){
          setTimeout(function () {
            swal({
                title: "Record Added Successfully!",
                text: "New record added!",
                icon: "success",
                button: "OK",
            });
          }, 1500);
        }
        $('#record').trigger("reset");
        e.preventDefault();
  });

  //Form processing for cognitive data
  $("#cognitive").on("submit", function (e) {
        

    var dataString = $(this).serialize();
    

    $.ajax({
            url: "../controllers/process-records.php",
            data: dataString,
            
            encode: true,
            type: "POST",
            success: function () {
              
              $("#cognitiv").html("<div id='message'></div>");
              $("#message")
                .html("<h2>Contact Form Submitted!</h2>")
                .append("<p>We will be in touch soon.</p>")
                .hide()
                .fadeIn(1500, function () {
                  
              });
              
            }
            
      });
      
      
      
      if(dataString != ""){
        setTimeout(function () {
          swal({
              title: "Cognitive Data Added Successfully!",
              text: "New cognitive record added!",
              icon: "success",
              button: "OK",
          });
        }, 1500);
      }
      $('#cognitive').trigger("reset");
      e.preventDefault();
  });

  //Form processing for health data
  $("#health").on("submit", function (e) {
        

    var dataString = $(this).serialize();
    

     $.ajax({
            url: "../controllers/process-records.php",
            data: dataString,
            
            encode: true,
            type: "POST",
            success: function () {
              
              $("#healt").html("<div id='message'></div>");
              $("#message")
                .html("<h2>Contact Form Submitted!</h2>")
                .append("<p>We will be in touch soon.</p>")
                .hide()
                .fadeIn(1500, function () {
                  
              });
              
            }

      });   

      

      if(dataString != "length=&weight=&blood="){
        setTimeout(function () {
          swal({
              title: "Health Data Added Successfully!",
              text: "New health data added!",
              icon: "success",
              button: "OK",
          });
        }, 1500);
      }
      $('#health').trigger("reset");
      e.preventDefault();
  });


  //Form processing for nutrition data
  $("#nutrition").on("submit", function (e) {
        

    var dataString = $(this).serialize();
    

    $.ajax({
            url: "../controllers/process-records.php",
            data: dataString,
            
            encode: true,
            type: "POST",
            success: function () {
              
              $("#nutritio").html("<div id='message'></div>");
              $("#message")
                .html("<h2>Contact Form Submitted!</h2>")
                .append("<p>We will be in touch soon.</p>")
                .hide()
                .fadeIn(1500, function () {
                  
              });
              
            }
            
      });   

      
      if(dataString != ""){
        setTimeout(function () {
          swal({
              title: "Nutrition Data Added Successfully!",
              text: "New nutrition data added!",
              icon: "success",
              button: "OK",
          });
        }, 1500);
      }
      $('#nutrition').trigger("reset");
      e.preventDefault();
  });

  //Form processing for beneficiaries staff
  $("#bene").on("submit", function (e) {
        
    
    var dataString = $(this).serialize();
    

     $.ajax({
            url: "../controllers/process-bene.php",
            data: dataString,
            
            encode: true,
            type: "POST",
            success: function () {
              
              $("#demo1-uploa").html("<div id='message'></div>");
              $("#message")
                .html("<h2>Contact Form Submitted!</h2>")
                .append("<p>We will be in touch soon.</p>")
                .hide()
                .fadeIn(1500, function () {
                  
              });
              
            }
            
      });  
      console.log(dataString);
      //Make sure appropriate data is submitted before triggering alert 
      if(dataString != "f-name=&m-name=&l-name=&address=&finish="){
        setTimeout(function () {
          swal({
              title: "Beneficiary Added Successfully!",
              text: "New beneficiary added!",
              icon: "success",
              button: "OK",
          });
        }, 1500);
      }
      
      $('#bene').trigger("reset");
      e.preventDefault();
  });

  //Form processing for beneficiaries as parents
  $("#parent").on("submit", function (e) {
        
    
    var dataString = $(this).serialize();
    

    $.ajax({
            url: "../controllers/process-bene.php",
            data: dataString,
            
            encode: true,
            type: "POST",
            success: function () {
              
              $("#demo1-uploa").html("<div id='message'></div>");
              $("#message")
                .html("<h2>Contact Form Submitted!</h2>")
                .append("<p>We will be in touch soon.</p>")
                .hide()
                .fadeIn(1500, function () {
                  
              });
              
            }
            
      });
     
      //Make sure appropriate data is submitted before triggering alert 
      if(dataString != "mobileno="){
        setTimeout(function () {
          swal({
              title: "Parent Contact Added Successfully!",
              text: "New parent added!",
              icon: "success",
              button: "OK",
          });
        }, 1500);
        $('#parent').trigger("reset");
      }
      e.preventDefault();
  });
//Form processing for beneficiaries staff
  $("#child").on("submit", function (e) {
        
    
    var dataString = $(this).serialize();
    

    var request= $.ajax({
            url: "../controllers/process-bene.php",
            data: dataString,
            
            encode: true,
            type: "POST",
            success: function () {
              
              $("#demo1-uploa").html("<div id='message'></div>");
              $("#message")
                .html("<h2>Contact Form Submitted!</h2>")
                .append("<p>We will be in touch soon.</p>")
                .hide()
                .fadeIn(1500, function () {
                  
              });
              
            }
            
      });
      request.done(function(msg) {
        console.log( msg );
      });
      request.fail(function(jqXHR, textStatus) {
        console.log( "Request failed: " + textStatus );
      });  
      
      console.log(dataString);
      //Make sure appropriate data is submitted before triggering alert 
      if(dataString != ""){
        setTimeout(function () {
          swal({
              title: "Child Development Stage Added Successfully!",
              text: "New child added!",
              icon: "success",
              button: "OK",
          });
        }, 1500);
        $('#child').trigger("reset");
      }
      e.preventDefault();
  });

    
});
