//Christiaan Bouwer VVF6HCS19 - ITEC301 Assignment

function validate(form) 
    {
        fail += validateEmail(form.email.value)
        fail += validatePass(form.pass.value)        

        if (fail == ""){
            return true;
        } else { 
            alert(fail); 
            return false;
        }
    }

    function validatePassword(password) {
        if (password == "" || password == null) {
            alert("Password field is empty");
            return "Password field is empty";
        }
        var pw = /^(?=.*[A-Za-z])(?=.\d)(?=.*[!@$%^&*()])[A-Za-z\d!@$%^&*()]{8,}$/;
        return pw.test(password);
    }

   function validateEmail(email) {
        if (email == "" || email== null) {
            alert("Email field is empty");
            return "Email field is empty";
        } else if (/[^a-zA-Z0-9.@_-]/.test(email)) || !((email.indexOf(".") > 0) && (email.indexOf("@") > 0)) {
            return "The Email address is invalid.";
        }
        return "";
    }

