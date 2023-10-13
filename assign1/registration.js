/*
$(document).ready(function(){
    $('.regiForm').on('submit', function(){
        if($('#name').val() ==""){
			$('#msg').html('Please enter Name').css('color', 'red');
		  return false;
		} else if ($('#email').val() == ""){
			$('#msg').html('Please enter Email').css('color', 'red');
		  return false;
		} else if ($('#mobil').val() == ""){
			$('#msg').html('Please enter Mobile phone number').css('color', 'red');
		  return false;
		} else if ($('#password').val() == ""){
			$('#msg').html('Please enter Password').css('color', 'red');
		  return false;
		} else if ($('#re_password').val() == ""){
			$('#msg').html('Please enter Password Again').css('color', 'red');
		  return false;
		} else if ($('#address').val() == ""){
			$('#msg').html('Please enter Address').css('color', 'red');
		  return false;
		} else {
			alert("Your have registed successfully!");
		}
    });
}); */
//I tried to use jQuery, but it doesn't work. I think it's the jquery file doesn't link successfully. 
//And time doesn't allow me to spend more time on this, so I just keep this part here. Will test it later.


//Validate the registration information for clients.
function validateForm(){
	//Store all input values from users
	let name = document.forms["client_registration"]["name"].value;
	let email = document.forms["client_registration"]["email"].value;
	let mobil = document.forms["client_registration"]["mobil"].value;
	let password = document.forms["client_registration"]["password"].value;
	let re_password = document.forms["client_registration"]["re_password"].value;
	let address = document.forms["client_registration"]["address"].value;
	//Check the password pattern, need 6 to 12 length, 
	//include at least one lowercase,one uppercase,one number and one of !@#$%
	var reg=/^(?![a-zA-Z]+$)(?!\D+$)(?!\!@#$%+$).{6,12}$/;
	//Check all the information has been input
	if(name == ""){
		alert('Please enter name.');
		return false;
	} else if (email == ""){
		alert('Please enter email.');
		return false;
	} else if (mobil == ""){
		alert('Please enter mobile phone number.');
		return false;
	} else if (password == ""){
		alert('Please enter password.');
		return false;
	} else if (!reg.test(password)){
		alert('Please enter a 6 to 12 length password include at least one lower case letter, one uppercase letter, one number and one of following:!@#$%.');
		return false;
	} else if (re_password == ""){
		alert('Please enter password again.');
		return false;
	} else if (password != re_password){
		alert('Please enter same password.');
		return false;
	} else if (address == ""){
		alert('Please enter address.');
		return false;
	} else {
		alert('You have registed successfully!');
	}
}

//Validate the registration information for hosts
function validateForm1(){
	//Store all input values from users
	let name1 = document.forms["host_registration"]["host_name"].value;
	let email1 = document.forms["host_registration"]["host_email"].value;
	let mobil1 = document.forms["host_registration"]["host_mobil"].value;
	let password1 = document.forms["host_registration"]["host_password"].value;
	let re_password1 = document.forms["host_registration"]["host_re_password"].value;
	let address1 = document.forms["host_registration"]["host_address"].value;
	let abn = document.forms["host_registration"]["host_abn"].value;
	//Same password check
	var reg=/^(?![a-zA-Z]+$)(?!\D+$)(?!\!@#$%+$).{6,12}$/;
	//check all information has been input
	if(name1 == ""){
		alert('Please enter name.');
		return false;
	} else if (email1 == ""){
		alert('Please enter email.');
		return false;
	} else if (mobil1 == ""){
		alert('Please enter mobile phone number.');
		return false;
	} else if (password1 == ""){
		alert('Please enter password.');
		return false;
	} else if (!reg.test(password1)){
		alert('Please enter a 6 to 12 length password include at least one lower case letter, one uppercase letter, one number and one of following:!@#$%.');
		return false;
	} else if (re_password1 == ""){
		alert('Please enter password again.');
		return false;
	} else if (password1 != re_password1){
		alert('Please enter same password.');
		return false;
	} else if (address1 == ""){
		alert('Please enter address.');
		return false;
	} else if (abn == ""){
		alert('Please enter you ABN number.');
		return false;
	} else {
		alert('You have registed successfully!');
	}
}
