$(document).ready(function () {

    var calendar = $('#calendar').fullCalendar({
        header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay,listWeek'
        },
        height: 400,
        editable: true,
        events: "../controllers/fetch-event.php",
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');
            var goal = prompt("Event Goal:")

            if (title && goal) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: '../controllers/add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end + '&goal=' + goal,
                    type: "POST",
                    success: function (data) {
                        setTimeout(function () {
                            swal({
                                title: "Event Added Successfully!",
                                text: "New event added!",
                                icon: "success",
                                button: "OK",
                            });
                        }, 1500);
                        displayMessage("Added Successfully");
                        
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                          
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
            setTimeout(function(){
                loadCalendar();
            },5000)
            
            
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    setTimeout(function () {
                        swal({
                            title: "Updating an Event!",
                            text: "Do you really want to change event date?",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        }).then((willDelete) => {
                            if (willDelete) {
                                swal("Event has been updated!", {
                                    icon: "success",
                                    
                                });
                                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    
                                var request= $.ajax({
                                    url: '../controllers/edit-event.php',
                                    data: 'title=' + event.title + '&start=' + start + '&id=' + event.id,
                                    dataType: 'json',
                                    encode: true,
                                    type: "POST",
                                    success: function (response) {
                                        
                            
                                        displayMessage("Updated Successfully");
                                    }
                                    
                                });
                                request.done(function(msg) {
                                    console.log( msg );
                                  });
                                  
                                  request.fail(function(jqXHR, textStatus) {
                                    console.log( "Request failed: " + textStatus );
                                  });
                            } else {
                                swal("Event wasn't updated!",{
                                    icon: "error",
                                });
                                setTimeout(function(){
                                    loadCalendar();
                                },3000)
                            }
                        });
                    }, 0);
                    
                },
        eventClick: function (event) {
            var deleteMsg = setTimeout(function () {
                swal({
                    title: "Deleting an Event",
                    text: "Do you really want to delete event?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                      swal("Event has been deleted!", {
                        icon: "success",
                        
                      });
                      $.ajax({
                        type: "POST",
                        url: "../controllers/delete-event.php",
                        data: "&id=" + event.id,
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                    } else {
                      swal("Event wasn't deleted!",{
                          icon: "error",
                      });
                      
                    }
                  });
            }, 0);

        },
        eventColor: '#933EC5',
        backgroundColor: '#1f2e86',   
		eventTextColor: '#1f2e86',
		textColor: '#378006'

    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { 
        $(".success").fadeOut(); 
    }, 1000);
}

//Refreshing the docment after inserting an event
function loadCalendar(){
    location.reload();
    return false;
    
}
