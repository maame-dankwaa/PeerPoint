//Sign up form validation using JQuery
$(document).ready(function (){
    //prevent jquery from accepting other emails
    $.validator.addMethod('kayamail',function(value){
        return /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
    },"Only KayaCare mails allowed"
    );

    $('form[id="login-form').validate({
        errorElement: 'div',
        rules: {
            pass:{
                required: true,
                minlength: 8
            },
            email: { 
                required: true,
                email: true, 
                kayamail: true
            }
        },
        messages: {
            email:{
                required: "Your mail is required",
                email: "Use your KayaCare mail",
                kayamail: "Use your KayaCare mail"
            },
            pass: {
                required: "Password is required",
                minlength: "Password must be at least 8 characters long"                
            }
        },

        //submit handler
        submitHandler: function(form) {
            form.submit();
        }
    });

});
