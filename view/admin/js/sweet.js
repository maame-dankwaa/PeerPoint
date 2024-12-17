$(document).ready(function (){
    $('#signup-form').on('submit',function(e) {
        e.preventDefault(); 
        $.ajax({
            
            url:'home.php', //===PHP file name====
            data:$(this).serialize(),
            type:'POST',
            success:function(data){
                console.log(data);
                //Success Message == 'Title', 'Message body', Last one leave as it is
                swal({
                    title: "Alert Set on Timer",
                    text: "This alert will disappear after 3 seconds.",
                    icon: "success",
                    background: "white",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 10000000
                  });
                location.href="home.php"
            },
            error:function(data){
                //Error Message == 'Title', 'Message body', Last one leave as it is
                swal({
                    title: "Alert Set on Timer",
                    text: "This alert will disappear after 3 seconds.",
                    icon: "success",
                    background: "white",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 10000000
                  });
            }
            }); 
           
    });
});
