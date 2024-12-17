//Sign up form validation using JQuery
$(document).ready(function (){
    //prevent jquery from accepting other emails
    $.validator.addMethod('kayamail',function(value){
        return /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
    },"Only KayaCare mails allowed"
    );
    
    $('form[id="signup-form"').validate({
        errorElement: 'div',
        rules: {
            "f-name":{
                required: true,
                minlength: 1
            },
            "l-name":{
                required: true,
                minlength: 1
            },
            pass:{
                required: true,
                minlength: 8
            },
            re_pass: {
                required: true,
                minlength: 8,
                equalTo: "#pass"
            },
            email: { 
                required: true,
                email: true, 
                kayamail: true
            }
        },
        messages: {
            "f-name": {
                required:"Your first name is required",
                minlength: "First name should be at least 5 characters long"
            },
            "l-name": {
                required:"Your last name is required",
                minlength: "Last name should be at least 5 characters long"
            },
            email:{
                required: "Your mail is required",
                email: "Use your KayaCare mail",
                kayamail: "Use your KayaCare mail"
            },
            pass: {
                required: "Password is required",
                minlength: "Password must be at least 8 characters long"                
            },
            re_pass:{
                required: "Password is required",
                minlength:"Password must be at least 8 characters long",
                equalTo: "Password mismatch, check it!"
            }
        },
    
        //submit handler
        submitHandler: function(form) {
            swal({
                title: "Signup Successful!",
                text: "Your details are valid!",
                icon: "success",
                button: "Login",
            });
            setTimeout(function () {
                form.submit();
            }, 7500);
        }
    });


});
