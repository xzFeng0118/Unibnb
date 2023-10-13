
//Add data with accommodation details
document.querySelector('#add_aoc').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then add them into the table
	let add_id = Number(document.getElementById("add_id").value);
	document.querySelector('#ac_id2').append(add_id);
	
	let add_loc = String(document.getElementById("add_loc").value);
	document.querySelector('#ac_loc2').append(add_loc);
	
	let add_room = String(document.getElementById("add_room").value);
	document.querySelector('#ac_room2').append(add_room);
	
	let add_bath = Number(document.getElementById("add_bath").value);
	document.querySelector('#ac_bath2').append(add_bath);
	
	let add_price = String(document.getElementById("add_price").value);
	document.querySelector('#ac_price2').append(add_price);
	
	let add_smoke = String(document.getElementById("add_smoke").value);
	document.querySelector('#ac_smoke2').append(add_smoke);
	
	let add_garage = String(document.getElementById("add_garage").value);
	document.querySelector('#ac_gar2').append(add_garage);
	
	let add_int = String(document.getElementById("add_int").value);
	document.querySelector('#ac_int2').append(add_int);
	
	let add_pet = String(document.getElementById("add_pet").value);
	document.querySelector('#ac_pet2').append(add_pet);
	
	let add_address = String(document.getElementById("add_add").value);
	document.querySelector('#ac_add2').append(add_address);
	
})

//Close the modal window by clicking outside the modal
var modal = document.getElementById('add');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//Edit data with accommodation details
document.querySelector('#edi_btn1').addEventListener('click', function(){
	//Read the input data and store them in variables
	//Then replace the data that already in the table.
	let ac_id = Number(document.getElementById("edi_id").value);
	document.querySelector('#ac_id').textContent = ac_id;
	
	let ac_loc = String(document.getElementById("edi_loc").value);
	document.querySelector('#ac_loc').textContent = ac_loc;
	
	let ac_room = String(document.getElementById("edi_room").value);
	document.querySelector('#ac_room').textContent = ac_room;
	
	let ac_bath = String(document.getElementById("edi_bath").value);
	document.querySelector('#ac_bath').textContent = ac_bath;
	
	let ac_price = String(document.getElementById("edi_price").value);
	document.querySelector('#ac_price').textContent = ac_price;
	
	let ac_smoke = String(document.getElementById("edi_smoke").value);
	document.querySelector('#ac_smoke').textContent = ac_smoke;
	
	let ac_garage = String(document.getElementById("edi_garage").value);
	document.querySelector('#ac_gar').textContent = ac_garage;
	
	let ac_internet = String(document.getElementById("edi_int").value);
	document.querySelector('#ac_int').textContent = ac_internet;
	
	let ac_pet = String(document.getElementById("edi_pet").value);
	document.querySelector('#ac_pet').textContent = ac_pet;
	
	let ac_add = String(document.getElementById("edi_add").value);
	document.querySelector('#ac_add').textContent = ac_add;
	
})



//delete data from accommodation details
document.querySelector('#del_btn1').addEventListener('click', function(){
	let del1 = document.getElementById("data1")
	del1.remove();
})

//Calculate the average rate for host
function ave_rate(){
	//get all rates value in the table
	let rate1 = Number(document.querySelector('#rate1').textContent);
	console.log(rate1);
	
	let rate2 = Number(document.querySelector('#rate2').textContent);
	console.log(rate2);
	
	let rate3 = Number(document.querySelector('#rate3').textContent);
	console.log(rate3);
	
	let rate4 = Number(document.querySelector('#rate4').textContent);
	console.log(rate4);
	
	let rate5 = Number(document.querySelector('#rate5').textContent);
	console.log(rate5);
	
	//get number of rates by class
	let num_rate = document.getElementsByClassName("rate").length;
	console.log(num_rate);
	
	//sum of rates in table divided by num of rates
	let ave_rate = (rate1 + rate2 + rate3 + rate4 + rate5)/num_rate
	console.log(ave_rate);
	document.querySelector('#ave_rate').textContent = ave_rate;
}
ave_rate();
