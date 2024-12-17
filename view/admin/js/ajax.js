$(document).ready(function(){
    //Display records for all Videos
    $('#table').bootstrapTable({
        url: '../controllers/list-video.php',
        pagination: true,
        search: true,
        toggle:"table"
    });


    //Display all records for Records table
    $('#table-record').bootstrapTable({
        url: '../controllers/list-records.php',
        pagination: true,
        search: true,
        toggle:"table"
    });

    //Display all records for Records table
    $('#table-cognitive').bootstrapTable({
    url: '../controllers/list-cognitive.php',
    pagination: true,
    search: true,
    toggle:"table"
    });

    //Display all records for Records table
    $('#table-health').bootstrapTable({
        url: '../controllers/list-health.php',
        pagination: true,
        search: true,
        toggle:"table"
    });

    $('#table-nutrition').bootstrapTable({
        url: '../controllers/list-nutrition.php',
        pagination: true,
        search: true,
        toggle:"table"
    });

    //Displaying records for donors
    $('#table-donor').bootstrapTable({
        url: '../controllers/list-comments.php',
        pagination: true,
        search: true,
        toggle:"table"
    });

    //Displaying records for beneficiaries
    $('#table-bene').bootstrapTable({
        url: '../controllers/list-bene.php',
        pagination: true,
        search: true,
        toggle:"table"
    });
	
	//Updating Staff
	$("#table").on('click-cell.bs.table', function(e,field, value, row,){
        console.log(field,value,row);
        //delete
        if(field == 'delete'){
            var deleteMsg = setTimeout(function () {
                swal({
                    title: "Deleting a Staff",
                    text: "Do you really want to Staff?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                      swal("Staff has been deleted!", {
                        icon: "success",
                        
                      });
                      var request= $.ajax({
                        url: '../controllers/update-staff.php',
                        data: {staff_id : row.staff_id ,delete: row.delete},
                        
                        encode: true,
                        type: "POST",
                        success: function (response,data) {
                            console.log(data);
                            if(!response.success) return response.msg;
                            else console.log(data);
                        }
                        
                        });
                        request.done(function(msg) {
                            console.log( msg );
                        });
                        
                        request.fail(function(jqXHR, textStatus) {
                            console.log( "Request failed: " + textStatus );
                        });
                    } else {
                      swal("Staff wasn't deleted!",{
                          icon: "error",
                      });
                      
                    }
                  });
            }, 0);
        }
        //update
        setTimeout(function () {		
            var request= $.ajax({
                url: '../controllers/update-staff.php',
                data: {vidId : row.vidId , author: row.author, dateCreated: row.dateCreated, vidTopic:row.vidTopic,vidUrl: row.vidUrl, numViews: row.numViews, rating:row.rating, approved: row.approved},
                
                encode: true,
                type: "POST",
                success: function (response,data) {
                    console.log(data);
                    if(!response.success) return response.msg;
                    else console.log(data);
                }
                
            });
            request.done(function(msg) {
                console.log( msg );
            });
            
            request.fail(function(jqXHR, textStatus) {
                console.log( "Request failed: " + textStatus );
            });
        }, 30000); //Delay ajax request for 30 seconds
    });
    
    //Updating Records
    $("#table-record").on('click-cell.bs.table', function(e,field, value, row,){
        console.log(field,value,row);

        if(field == 'delete'){
            var deleteMsg = setTimeout(function () {
                swal({
                    title: "Deleting a Record",
                    text: "Do you really want to Record?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                      swal("Record has been deleted!", {
                        icon: "success",
                        
                      });
                      var request= $.ajax({
                        url: '../controllers/update-staff.php',
                        data: {record_id : row.record_id ,delete: row.delete},
                        
                        encode: true,
                        type: "POST",
                        success: function (response,data) {
                            console.log(data);
                            if(!response.success) return response.msg;
                            else console.log(data);
                        }
                        
                        });
                        request.done(function(msg) {
                            console.log( msg );
                        });
                        
                        request.fail(function(jqXHR, textStatus) {
                            console.log( "Request failed: " + textStatus );
                        });
                    } else {
                      swal("Record wasn't deleted!",{
                          icon: "error",
                      });
                      
                    }
                  });
            }, 0);
        }
        

        setTimeout(function () {		
            var request= $.ajax({
                url: '../controllers/update-staff.php',
                data: {record_id : row.record_id ,kayacare_id: row.kayacare_id, development_gap: row.development_gap, record_date: row.record_date},
                
                encode: true,
                type: "POST",
                success: function (response,data) {
                    console.log(data);
                    if(!response.success) return response.msg;
                    else console.log(data);
                }
                
            });
            request.done(function(msg) {
                console.log( msg );
            });
            
            request.fail(function(jqXHR, textStatus) {
                console.log( "Request failed: " + textStatus );
            });
        }, 30000); //Delay ajax request for 30 seconds
    });
    
    //Updating Records
    $("#table-cognitive").on('click-cell.bs.table', function(e,field, value, row,){
        console.log(field,value,row);
        setTimeout(function () {		
            var request= $.ajax({
                url: '../controllers/update-staff.php',
                data: {record_id : row.record_id ,rw_index: row.rw_index, numeracy_skills: row.numeracy_skills, decision_making: row.decision_making, ct_index:row.ct_index, problem_solving:row.problem_solving, curiosity:row.curiosity},
                
                encode: true,
                type: "POST",
                success: function (response,data) {
                    console.log(data);
                    if(!response.success) return response.msg;
                    else console.log(data);
                }
                
            });
            request.done(function(msg) {
                console.log( msg );
            });
            
            request.fail(function(jqXHR, textStatus) {
                console.log( "Request failed: " + textStatus );
            });
        }, 30000); //Delay ajax request for 30 seconds
	});
    
    //Updating Records
    $("#table-nutrition").on('click-cell.bs.table', function(e,field, value, row,){
        console.log(field,value,row);
        setTimeout(function () {		
            var request= $.ajax({
                url: '../controllers/update-staff.php',
                data: {record_id : row.record_id ,iron_deficiency: row.iron_deficiency, zinc_deficiency: row.zinc_deficiency, growth: row.growth},
                
                encode: true,
                type: "POST",
                success: function (response,data) {
                    console.log(data);
                    if(!response.success) return response.msg;
                    else console.log(data);
                }
                
            });
            request.done(function(msg) {
                console.log( msg );
            });
            
            request.fail(function(jqXHR, textStatus) {
                console.log( "Request failed: " + textStatus );
            });
        }, 30000); //Delay ajax request for 30 seconds
    });

    //Updating Beneficiaries
    $("#table-bene").on('click-cell.bs.table', function(e,field, value, row,){
        console.log(field,value,row);
        //delete
        if(field == 'delete'){
            var deleteMsg = setTimeout(function () {
                swal({
                    title: "Deleting a Beneficiary",
                    text: "Do you really want to Beneficiary?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                      swal("Mother and Child have been deleted!", {
                        icon: "success",
                        
                      });
                      var request= $.ajax({
                        url: '../controllers/update-staff.php',
                        data: {bene_id : row.bene_id ,delete: row.delete},
                        
                        encode: true,
                        type: "POST",
                        success: function (response,data) {
                            console.log(data);
                            if(!response.success) return response.msg;
                            else console.log(data);
                        }
                        
                        });
                        request.done(function(msg) {
                            console.log( msg );
                        });
                        
                        request.fail(function(jqXHR, textStatus) {
                            console.log( "Request failed: " + textStatus );
                        });
                    } else {
                      swal("Beneficiary not deleted wasn't deleted!",{
                          icon: "error",
                      });
                      
                    }
                  });
            }, 0);
        }
        else{
            setTimeout(function () {		
                var request= $.ajax({
                    url: '../controllers/update-staff.php',
                    data: {bene_id : row.bene_id ,parent_name: row.parent_name, phone: row.phone, child_name: row.child_name, dob: row.dob, sex: row.sex, development_stage: row.development_stage,location: row.location },
                    
                    encode: true,
                    type: "POST",
                    success: function (response,data) {
                        console.log(data);
                        if(!response.success) return response.msg;
                        else console.log(data);
                    }
                    
                });
                request.done(function(msg) {
                    console.log( msg );
                });
                
                request.fail(function(jqXHR, textStatus) {
                    console.log( "Request failed: " + textStatus );
                });
            }, 30000); //Delay ajax request for 30 seconds
    
        } 
    });
});
