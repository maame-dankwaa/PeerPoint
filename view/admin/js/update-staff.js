(function ($) {
    "use strict";
    
   
       
    $('#staff').editable({
        type: "POST",
        container: 'body',
        selector: 'td',
        url: "../controllers/update-staff.php",
        title: 'First Name',
        dataType: 'json',
        validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        }
    });
      
      
})(jQuery); 
