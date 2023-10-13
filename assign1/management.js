//Edit data with accommodation details
document.querySelector('#edi_btn1').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then replace the data that already in the table.
	let ac_id = document.getElementById("edi_id0").value;
	document.querySelector('#ac_id').textContent = ac_id;
	
	let ac_loc = document.getElementById("edi_loc").value;
	document.querySelector('#ac_loc').textContent = ac_loc;
	
	let ac_room = document.getElementById("edi_room").value;
	document.querySelector('#ac_room').textContent = ac_room;
	
	let ac_bath = document.getElementById("edi_bath").value;
	document.querySelector('#ac_bath').textContent = ac_bath;
	
	let ac_price = document.getElementById("edi_price").value;
	document.querySelector('#ac_price').textContent = ac_price;
	
	let ac_smoke = document.getElementById("edi_smoke").value;
	document.querySelector('#ac_smoke').textContent = ac_smoke;
	
	let ac_garage = document.getElementById("edi_garage").value;
	document.querySelector('#ac_gar').textContent = ac_garage;
	
	let ac_internet = document.getElementById("edi_int").value;
	document.querySelector('#ac_int').textContent = ac_internet;
	
	let ac_pet = document.getElementById("edi_pet").value;
	document.querySelector('#ac_pet').textContent = ac_pet;
	
	let ac_add = document.getElementById("edi_add").value;
	document.querySelector('#ac_add').textContent = ac_add;
	
	let ac_rate = document.getElementById("edi_rate").value;
	document.querySelector('#ac_rate').textContent = ac_rate;
})



//delete data from accommodation details
document.querySelector('#del_btn1').addEventListener('click', function(){
	let del1 = document.getElementById("data1")
	del1.remove();
})


//Add data with client information
document.querySelector('#add_cli1').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then add them into the table
	let add_id1 = document.getElementById("add_cli_id").value;
	document.querySelector('#cli_id2').append(add_id1);
	
	let add_name1 = document.getElementById("add_cli_name").value;
	document.querySelector('#cli_name2').append(add_name1);
	
	let add_email1 = document.getElementById("add_cli_email").value;
	document.querySelector('#cli_email2').append(add_email1);
	
	let add_phone1 = document.getElementById("add_cli_phno").value;
	document.querySelector('#cli_ph2').append(add_phone1);
	
	let add_address1 = document.getElementById("add_cli_address").value;
	document.querySelector('#cli_ad2').append(add_address1);
	
})


//Edit data with client information
document.querySelector('#edi_cli1').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then replace the data that already in the table.
	let edi_id1 = document.getElementById("edi_cli_id").value;
	document.querySelector('#cli_id1').textContent = edi_id1;
	
	let edi_name1 = document.getElementById("edi_cli_name").value;
	document.querySelector('#cli_name1').textContent = edi_name1;
	
	let edi_email1 = document.getElementById("edi_cli_email").value;
	document.querySelector('#cli_email1').textContent = edi_email1;
	
	let edi_phone1 = document.getElementById("edi_cli_phno").value;
	document.querySelector('#cli_ph1').textContent = edi_phone1;
	
	let edi_address1 = document.getElementById("edi_cli_address").value;
	document.querySelector('#cli_ad1').textContent = edi_address1;
	
})

//delete data from client details
document.querySelector('#del_cli1').addEventListener('click', function(){
	let cli1 = document.getElementById("cli_data1")
	cli1.remove();
})

//Add data with host information
document.querySelector('#add_host1').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then add them into the table
	let add_id2 = document.getElementById("add_host_id").value;
	document.querySelector('#host_id2').append(add_id2);
	
	let add_name2 = document.getElementById("add_host_name").value;
	document.querySelector('#host_name2').append(add_name2);
	
	let add_email2 = document.getElementById("add_host_email").value;
	document.querySelector('#host_email2').append(add_email2);
	
	let add_phone2 = document.getElementById("add_host_phno").value;
	document.querySelector('#host_ph2').append(add_phone2);
	
	let add_address2 = document.getElementById("add_host_address").value;
	document.querySelector('#host_ad2').append(add_address2);
	
	let add_abn = document.getElementById("add_abn").value;
	document.querySelector('#host_abn2').append(add_abn);
	
})

//Edit data with host information
document.querySelector('#edi_host1').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then replace the data that already in the table.
	let edi_id2 = document.getElementById("edi_host_id").value;
	document.querySelector('#host_id1').textContent = edi_id2;
	
	let edi_name2 = document.getElementById("edi_host_name").value;
	document.querySelector('#host_name1').textContent = edi_name2;
	
	let edi_email2 = document.getElementById("edi_host_email").value;
	document.querySelector('#host_email1').textContent = edi_email2;
	
	let edi_phone2 = document.getElementById("edi_host_phno").value;
	document.querySelector('#host_ph1').textContent = edi_phone2;
	
	let edi_address2 = document.getElementById("edi_host_address").value;
	document.querySelector('#host_add1').textContent = edi_address2;
	
	let edi_abn2 = document.getElementById("edit_abn").value;
	document.querySelector('#host_abn').textContent = edi_abn2;
	
})

//delete data from host details
document.querySelector('#del_host1').addEventListener('click', function(){
	let host1 = document.getElementById("host_data1")
	host1.remove();
})

//delete review
document.querySelector('#del_re1').addEventListener('click', function(){
	let review1 = document.getElementById("review_data1")
	review1.remove();
})
