//Sign up form validation using JQuery
$(document).ready(function (){
    //prevent jquery from accepting other emails
    $.validator.addMethod('kayamail',function(value){
        return /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
    },"Only Ashesi mails allowed"
    );
    
    $('form[id="signup-form"').validate({
        errorElement: 'div',
        rules: {
            description:{
                required: true,
                minlength: 1
            },
            url:{
                required: true,
                minlength: 1
            },
            file:{
                required: true
            },
            
        },
        messages: {
            description: {
                required:"Please provide a short description",
                minlength: "A sentence is good enough"
            },
            url: {
                required:"Please provide a url",
                minlength: "Don't be stubborn submit correct link"
            },
            file:{
                required: "Upload an Image",
            },
            
        },
    
        //submit handler
        submitHandler: function(form) {
            swal({
                title: "Tutorial Details",
                text: "Tutorial details are valid!",
                icon: "success",
                button: "Thank You",
            });
            setTimeout(function () {
                form.submit();
            }, 7500);
        }
    });


});
