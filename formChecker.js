function checkForm() {

	var email= document.getElementById("email").value;
	var password = document.getElementById("password").value;


	if((password == null || password == "") || (email == null || email == "")) {
		if (email == ""){
			alert("Email can't be blank");
		}

		if (password == ""){
			alert("Password can't be blank");
		}

		return false;
	}
	return true;
}


