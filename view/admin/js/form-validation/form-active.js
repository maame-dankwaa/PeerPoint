(function ($) {
 "use strict";
 // Validation for order form
		$(".add-professors").validate(
		{					
			rules:
			{	
				"f-name":
				{
					required: true
				},
				"l-name":
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				address:
				{
					required: true
				},
				department:
				{
					required: true
				},
				postcode:
				{
					required: true
				},
				imageico:
				{
					required: true
				},
				mobileno:
				{
					required: true
				},
				description:
				{
					required: true
				},
				gender:
				{
					required: true
				},
				country:
				{
					required: true
				},
				state:
				{
					required: true
				},
				city:
				{
					required: true
				},
				website:
				{
					required: true
				},
				finish:
				{
					required: true
				}
			},
			messages:
			{	
				"f-name":
				{
					required: 'Please enter first name'
				},
				"l-name":
				{
					required: 'Please enter last name'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				address:
				{
					required: 'Please enter your address'
				},
				department:
				{
					required: 'Please enter department'
				},
				postcode:
				{
					required: 'Please enter postcode'
				},
				imageico:
				{
					required: 'Please upload image'
				},
				mobileno:
				{
					required: 'Please enter mobile number'
				},
				description:
				{
					required: 'Please enter description'
				},
				gender:
				{
					required: 'Please select gender'
				},
				country:
				{
					required: 'Please select country'
				},
				state:
				{
					required: 'Please select state'
				},
				city:
				{
					required: 'Please select city'
				},
				website:
				{
					required: 'Please enter website url'
				},
				finish:
				{
					required: 'Please select dateof birth'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
 
 // Validation for order form
		$("#acount-infor").validate(
		{					
			rules:
			{	
				email:
				{
					required: true,
					email: true
				},
				phoneno:
				{
					required: true
				},
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				},
				confarmpassword:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				}
			},
			messages:
			{	
			
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				phoneno:
				{
					required: 'Please enter mobile number'
				},
				password:
				{
					required: 'Please enter your password'
				},
				confarmpassword:
				{
					required: 'Please enter your confarm password'
				}
				
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
 
 // Validation for order form
		$(".addcourse").validate(
		{					
			rules:
			{	
				rwindex:
				{
					required: true
				},
				finish:
				{
					required: true
				},
				development:{
					required: true
				},
				numeracy:
				{
					required: true
				},
				decision:
				{
					required: true
				},
				problem:
				{
					required: true
				},
				ct:
				{
					required: true
				},
				curiosity:
				{
					required: true
				},
				crprofessor:
				{
					required: true
				},
				year:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				phoneno:
				{
					required: true
				},
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				},
				confarmpassword:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				}
			},
			messages:
			{	
				rwindex:
				{
					required: 'Please enter reading index'
				},
				finish:
				{
					required: 'Please select date for record'
				},
				development:{
					required: 'Please select a development gap'
				},
				numeracy:
				{
					required: 'Please enter numeracy skill'
				},
				decision:
				{
					required: 'Please enter decision making skill'
				},
				problem:
				{
					required: 'Please enter problem solving skill'
				},
				ct:
				{
					required: 'Please enter critical thinking index'
				},
				curiosity:
				{
					required: 'Please enter curiosity level'
				},
				crprofessor:
				{
					required: 'Please enter course professor'
				},
				year:
				{
					required: 'Please enter year'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				phoneno:
				{
					required: 'Please enter mobile number'
				},
				password:
				{
					required: 'Please enter your password'
				},
				confarmpassword:
				{
					required: 'Please enter your confarm password'
				}
				
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
		
		//validation for cognitive form
		$(".cognitive").validate(
			{					
				rules:
				{	
					rwindex:
					{
						required: true
					},
					finish:
					{
						required: true
					},
					development:{
						required: true
					},
					numeracy:
					{
						required: true
					},
					mobileno:
					{
					required: true
					},
					decision:
					{
						required: true
					},
					problem:
					{
						required: true
					},
					ct:
					{
						required: true
					},
					curiosity:
					{
						required: true
					},
					crprofessor:
					{
						required: true
					},
					year:
					{
						required: true
					},
					email:
					{
						required: true,
						email: true
					},
					phoneno:
					{
						required: true
					},
					password:
					{
						required: true,
						minlength: 3,
						maxlength: 20
					},
					confarmpassword:
					{
						required: true,
						minlength: 3,
						maxlength: 20
					}
				},
				messages:
				{	
					rwindex:
					{
						required: 'Please enter reading index'
					},
					finish:
					{
						required: 'Please select date for record'
					},
					development:{
						required: 'Please select a development gap'
					},
					numeracy:
					{
						required: 'Please enter numeracy skill'
					},
					decision:
					{
						required: 'Please enter decision making skill'
					},
					problem:
					{
						required: 'Please enter problem solving skill'
					},
					ct:
					{
						required: 'Please enter critical thinking index'
					},
					curiosity:
					{
						required: 'Please enter curiosity level'
					},
					crprofessor:
					{
						required: 'Please enter course professor'
					},
					mobileno:
					{
					required: 'Please enter mobile number'
					},
					year:
					{
						required: 'Please enter year'
					},
					email:
					{
						required: 'Please enter your email address',
						email: 'Please enter a VALID email address'
					},
					phoneno:
					{
						required: 'Please enter mobile number'
					},
					password:
					{
						required: 'Please enter your password'
					},
					confarmpassword:
					{
						required: 'Please enter your confarm password'
					}
					
				},					
				
				errorPlacement: function(error, element)
				{
					error.insertAfter(element.parent());
				}
			});


			//Validation for health form
			$(".health").validate(
				{					
					rules:
					{	
						length:
						{
							required: true
						},
						weight:
						{
							required: true
						},
						blood:{
							required: true
						},
						immu:
						{
							required: true
						},
						eyes:
						{
							required: true
						},
						ears:
						{
							required: true
						},
						allergies:
						{
							required: true
						}
						
					},
					messages:
					{	
						length:
						{
							required: 'Please enter provide height'
						},
						weight:
						{
							required: 'Please enter weight in kg'
						},
						blood:{
							required: 'Please enter blood pressure'
						},
						immu:
						{
							required: 'Please select immunisation data'
						},
						ears:
						{
							required: 'Please select ear data'
						},
						eyes:
						{
							required: 'Please eye data'
						},
						allergies:
						{
							required: 'Please indicate has allergies or not'
						}
						
					},					
					
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});

				//Validation for nutrition form
				$(".nutrition").validate(
					{					
						rules:
						{	
							iron:
							{
								required: true
							},
							zinc:
							{
								required: true
							},
							growth:{
								required: true
							}
							
							
						},
						messages:
						{	
							zinc:
							{
								required: 'Please select data for zinc deficiency'
							},
							iron:
							{
								required: 'Please select data for iron deficiency'
							},
							growth:{
								required: 'Please indicate growth index'
							}
							
						},					
						
						errorPlacement: function(error, element)
						{
							error.insertAfter(element.parent());
						}
					});
		//Validation for child form
		$(".child").validate(
		{					
			rules:
			{	
			
				development:{
					required: true
				}
				
			},
			messages:
			{	
				
				development:{
					required: 'Please select a development stage'
				}
				
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});

		
 
	// Validation for login form
		$("#comment").validate(
		{					
			rules:
			{	
				name:
				{
					required: true
				},
				message:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				}
			},
			messages:
			{	
				name:
				{
					required: 'Please enter your name'
				},
				message:
				{
					required: 'Please enter your message'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
		
	// Validation for login form
		$(".addlibrary").validate(
		{					
			rules:
			{	
				nameasset:
				{
					required: true
				},
				subject:
				{
					required: true
				},
				imageico:
				{
					required: true
				},
				type:
				{
					required: true
				},
				price:
				{
					required: true
				},
				year:
				{
					required: true
				},
				status:
				{
					required: true
				},
				department:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				}
			},
			messages:
			{	
				nameasset:
				{
					required: 'Please enter your name of assets'
				},
				subject:
				{
					required: 'Please enter your subject'
				},
				imageico:
				{
					required: 'Please enter image'
				},
				department:
				{
					required: 'Please enter your department'
				},
				type:
				{
					required: 'Please enter library type'
				},
				price:
				{
					required: 'Please enter price'
				},
				year:
				{
					required: 'Please enter year'
				},
				status:
				{
					required: 'Please enter status'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
	// Validation for login form
		$(".add-department").validate(
		{					
			rules:
			{	
				name:
				{
					required: true
				},
				headofdepartment:
				{
					required: true
				},
				email:
				{
					required: true
				},
				phone:
				{
					required: true
				},
				noofstudent:
				{
					required: true
				},
				status:
				{
					required: true
				}
			},
			messages:
			{	
				name:
				{
					required: 'Please enter your name'
				},
				headofdepartment:
				{
					required: 'Please enter head of department'
				},
				email:
				{
					required: 'Please enter email'
				},
				phone:
				{
					required: 'Please enter your phone'
				},
				noofstudent:
				{
					required: 'Please enter no of student'
				},
				status:
				{
					required: 'Please enter status'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
	// Validation for login form
		$("#send-mail").validate(
		{					
			rules:
			{	
				name:
				{
					required: true
				},
				headofdepartment:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				phone:
				{
					required: true
				},
				noofstudent:
				{
					required: true
				},
				status:
				{
					required: true
				}
			},
			messages:
			{	
				name:
				{
					required: 'Please enter your name'
				},
				headofdepartment:
				{
					required: 'Please enter head of department'
				},
				email:
				{
					required: 'Please enter email'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				noofstudent:
				{
					required: 'Please enter no of student'
				},
				status:
				{
					required: 'Please enter status'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
 
})(jQuery); 