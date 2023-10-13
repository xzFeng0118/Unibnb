function searchAc(){
	//store all input content in variables
	let location = String(document.forms["search"]["location"].value);
	let check_in = document.forms["search"]["check_in"].value;
	let check_out = document.forms["search"]["check_out"].value;
	let no_guest = document.forms["search"]["no_guest"].value;
	//Check all the things have been input, 
	//and the check out date must later than the check in date
	if(location == ""){
		alert('Please enter location.');
		return false;
	} else if (check_in == ""){
		alert('Please enter check in date.');
		return false;
	} else if (check_out == ""){
		alert('Please enter check out date.');
		return false;
	} else if (no_guest == ""){
		alert('Please enter number of guests.');
		return false;
	} else if (check_in > check_out) {
		alert('Please ensure the check out date is after the check in date.');
		return false;
	}
	
	//Load details in data 1
	let loc1 = document.getElementById('data1_loc').textContent;
	let chec_in1 = document.getElementById('data1_in').textContent;
	let chec_out1 = document.getElementById('data1_out').textContent;
	let no_gue1 = document.getElementById('data1_nu').textContent;
	
	//Load details in data 2
	let loc2 = document.getElementById('data2_loc').textContent;
	let chec_in2 = document.getElementById('data2_in').textContent;
	let chec_out2 = document.getElementById('data2_out').textContent;
	let no_gue2 = document.getElementById('data2_nu').textContent;
	
	//Load details in data 2
	let loc3 = document.getElementById('data3_loc').textContent;
	let chec_in3 = document.getElementById('data3_in').textContent;
	let chec_out3 = document.getElementById('data3_out').textContent;
	let no_gue3 = document.getElementById('data3_nu').textContent;
	
	//By matching the input with the data to make the search feature works
	//I store the data in HTML page and hidden them, if the input matches, they will appear
	if(location == loc1 && check_in == chec_in1 && check_out == chec_out1 && no_guest == no_gue1){
		document.getElementById("data1").style.display = "block";
	} else if (location == loc2 && check_in == chec_in2 && check_out == chec_out2 && no_guest == no_gue2) {
		document.getElementById("data2").style.display = "block";
	} else if (location == loc3 && check_in == chec_in3 && check_out == chec_out3 && no_guest == no_gue3) {
		document.getElementById("data3").style.display = "block";
	} else {
		alert('No related Accommodation');
	}
}
