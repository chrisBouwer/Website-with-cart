<!-- Christiaan Bouwer -->

<?php

    $name = $surname = $email = $pass = $passConf = "";

    if(isset($_POST['name']))
        $input = fix_string($_POST['name']);
	if (isset($_POST['surname']))
		$surname = fix_string($_POST['surname']);
	if (isset($_POST['email']))
		$username = fix_string($_POST['email']);
	if (isset($_POST['pass']))
		$password = fix_string($_POST['pass']);
	if (isset($_POST['passConf']))
		$age = fix_string($_POST['passConf']);

	$fail = validate_forename($name);
	$fail .= validate_surname($surname);
	$fail .= validate_username($email);
	$fail .= validate_password($pass);
	$fail .= validate_age($passConf);

    echo "<!DOCTYPE html><html><head><title>An Example Form</title>";
	if ($fail == "") {
		echo "</head><body>All data entered is validated:
		$name, $surname, $email, $pass, $passConf.</body></html>";
		exit;
	}
	
    function validate(form) 
    {
        fail = validateName(form.name.value)
        fail += validateSurname(form.surname.value)
        fail += validateEmail(form.email.value)
        fail += validatePass(form.pass.value)
        fail += validatePassConf(form.passConf.value)
        

        if (fail == ""){
            return true;
        } else { 
            alert(fail); 
            return false;
        }
    }

    function validateName(name) {
        if (name == "" || name == null){
            document.getElementById("name").style.backgroundColor="red";
            alert("Name field is empty");
            return "Name field is empty";
        } else {
            return "";
        }
    }

    function validateSurname(surname) {
        if (surname == "" || surname == null)){
            document.getElementById("surname").style.backgroundColor="red";
            alert("Surname field is empty"); 
            return "Surname field is empty";
        } else {
            return "";
        }
    }

    function validateEmail(email) {
        if (email == "" || email== null) {
            document.getElementById("email").style.backgroundColor="red";
            return "Email field is empty";
            alert("Email field is empty");
        } else if (/[^a-zA-Z0-9.@_-]/.test(email)) || !((email.indexOf(".") > 0) && (email.indexOf("@") > 0)) {
            document.getElementById("email").style.backgroundColor="red";
            return "The Email address is invalid.";
        }
        return "";
    }

    function validatePassword(password) {
        if (password == "" || password == null) {
            document.getElementById("password").style.backgroundColor="red";
            alert("Password field is empty");
            return "Password field is empty";
        }
        var pw = /^(?=.*[A-Za-z])(?=.\d)(?=.*[!@$%^&*()])[A-Za-z\d!@$%^&*()]{8,}$/;
        return pw.test(password);
    }

    function validatePassConf(passConf){
        if (passConf == "" || passConf == null) {
            document.getElementById("passConf").style.backgroundColor="red";
            alert("Password confirm is empty");
            return "Password confirm is empty";
        } else if  (!(passConf == $pass)){
            document.getElementById("passConf").style.backgroundColor="red";
            alert("Passwords do not match");
            return "Passwords do not match";
        }
        return "";
    }
?>