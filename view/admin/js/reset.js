
//Sign up form validation using JQuery
$(document).ready(function (){
    //prevent jquery from accepting other emails
    $.validator.addMethod('kayamail',function(value){
        return /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
    },"Only KayaCare mails allowed"
    );
    
    $('form[id="reset-form"').validate({
        errorElement: 'div',
        rules: {
            pass:{
                required: true,
                minlength: 8
            },
            re_pass: {
                required: true,
                minlength: 8,
                equalTo: "#pass"
            }
            
        },
        messages: {
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
                title: "Password Reset!",
                text: "New password confirmed!",
                icon: "success",
                button: "Login",
            });
            setTimeout(function () {
                form.submit();
            }, 5000);
        }
    });


});