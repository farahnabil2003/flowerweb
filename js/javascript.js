function validation(){
	var valid = true;
	
	formLabels = document.getElementsByTagName("label");
	
	var firstName = document.regForm.firstName.value;
	if(firstName==""){
		formLabels[0].innerHTML="First Name: [Required]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else if( !isNaN(firstName)){
		formLabels[0].innerHTML="First Name: [Text Only]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML="First Name:";
		formLabels[0].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var lastName = document.regForm.lastName.value;
	if(lastName==""){
		formLabels[1].innerHTML="Last Name: [Required]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if( !isNaN(lastName)){
		formLabels[1].innerHTML="Last Name: [Text Only]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Last Name:";
		formLabels[1].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var email = document.regForm.email.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email==""){
		formLabels[2].innerHTML="Email: [Required]";
		formLabels[2].style="color: red";
		valid = false;
	}
	else if(!re.test(email)){
		formLabels[2].innerHTML="Email: [Incorrect Email]";
		formLabels[2].style="color: red";
		valid = false;
	}
	else {
		formLabels[2].innerHTML="Email:";
		formLabels[2].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var mobile = document.regForm.mobile.value;
	if( isNaN(mobile)){
		formLabels[3].innerHTML="Mobile: [Numbers Only]";
		formLabels[3].style="color: red";
		valid = false;
	}
	else {
		formLabels[3].innerHTML="Mobile:";
		formLabels[3].style="color: black";
		valid = (valid) ? true : false;
	}
 	
	var password = document.regForm.password.value;
	if(password == ""){
		formLabels[4].innerHTML="Password: [Required]";
		formLabels[4].style="color: red";
		valid = false;
	}
	else if(password.length < 8){
		formLabels[4].innerHTML="Password: [Must be > 8]";
		formLabels[4].style="color: red";
		valid = false;
	}
	else {
		formLabels[4].innerHTML="Password:";
		formLabels[4].style="color: black";
		valid = (valid) ? true : false;
	}
	return valid;
}
	
function clear2(){
	var myArray = new Array();
	myArray[0] = "First Name: *";
	myArray[1] = "Last Name: *";
	myArray[2] = "Email: *";
	myArray[3] = "Mobile:";
	myArray[4] = "Password: *";
	for(var i=0 ; i < myArray.length ; i++){
		formLabels[i].innerHTML = myArray[i];
		formLabels[i].style = "color: black";
	}
}

var counter = 1;

function next(){
	var slideshow = document.getElementById("slideshow");
	if(counter != 4){
		counter++;
	}
	else {
		counter = 1;
	}
	slideshow.src = "img/"+counter+".png";
}

function prev(){
	var slideshow = document.getElementById("slideshow");
	if(counter != 1){
		counter--;
	}
	else {
		counter = 4;
	}
	slideshow.src = "img/"+counter+".png";
}

setInterval(next,2000);