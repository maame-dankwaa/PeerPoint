
//Sign up form validation using JQuery
$(document).ready(function (){
    //prevent jquery from accepting other emails
    $.validator.addMethod('kayamail',function(value){
        return /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
    },"Only Ashesi mails allowed"
    );
    
    $('form[id="forgot-form"').validate({
        errorElement: 'div',
        rules: {
            email: { 
                required: true,
                email: true, 
                kayamail: true
            }
        },
        messages: {
            email:{
                required: "Your mail is required",
                email: "Use your Ashesi mail",
                kayamail: "Use your Ashesi mail"
            }
        },
    
        //submit handler
        submitHandler: function(form) {
            
                form.submit();
        }
    });


});