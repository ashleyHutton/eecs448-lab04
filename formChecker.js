function checkForm() {

	alert("here's my function!");

	var shopping = document.getElementById("shopping").value;

	var email= document.getElementById("email").value;
	var password = document.getElementById("password").value;


	if((password == null || password == "") || (password == null || email == "") {

		alert("Blank field is not allowed!");
		return false;
	}
	return true;
}


