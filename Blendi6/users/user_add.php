<?php include '../common/configurations.php';?>
<?php include '../view/header.php';?>
<?php include '../view/navbarHCP.php';?>





<!-- for the php logic below, can we just use an 'include' to clean the file up a little? -->     
<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>


<!-- Form Validation JS. Will need to add the capacity to stack alerts if more 
than one field is missing, rather than displaying only one.  --> 

<!-- Will need to add the logic for verifying password and confirmation password. I thought
was on the right track with what I had (check out line 188 through 123 ).. --> 

<script>
    "use strict";

    var validate = function(event){

        var theForm = document.getElementById('adduser');
        var result = true;
        if (theForm.firstName.value === "" || theForm.firstName.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide a first name.";
            event.preventDefault();
            result = false;
            }
        if (theForm.lastName.value === "" || theForm.lastName.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide a last name.";
            event.preventDefault();
            result = false;
            }
        if (theForm.email.value === "" || theForm.email.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide an email.";
            event.preventDefault();
            result = false;
            }
        if (theForm.age.value === "" || theForm.age.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide patient's age.";
            event.preventDefault();
            result = false;
            }
        if (theForm.gender.value === "" || theForm.gender.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide patient's gender.";
            event.preventDefault();
            result = false;
            }
        if (theForm.password.value === "")
            {
            document.getElementById("message").innerHTML = "You must provide a password.";
            event.preventDefault();
            result = false;
            }
        if (theForm.password.value.length < 8)
            {
            document.getElementById("message").innerHTML = "Password must be longer than 8 characters.";
            event.preventDefault();
            result = false;
            }
        if (theForm.cpassword.value === "" || theForm.cpassword.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide confirmation password.";
            event.preventDefault();
            result = false;
            }
        if (theForm.cpassword.value !== theForm.password.value)
            {
            document.getElementById("message").innerHTML = "Password must be the match.";
            event.preventDefault();
            result = false;
            }
        if (theForm.refcode.value === "" || theForm.refcode.value.length < 2)
            {
            document.getElementById("message").innerHTML = "You must provide reference code.";
            event.preventDefault();
            result = false;
            }         
        return result;
    };

    //tell the browser what to do when the form gets submitted
    window.onload = function () {
        document.getElementById('adduser').onsubmit = function(event){validate(event);};
    }  
</script>
<div class="container">
    <div class="row main">
        <h1>New POG Registration</h1>
    </div>
    <hr>
    <div class="row">

        <form class="form" method="post" action="#" id='adduser'>

                <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label" id='firstName'>Patient First Name</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="firstName"  placeholder="Enter First Name"/>
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label" id='lastName'>Patient Last Name</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="lastname"  placeholder="Enter Last Name"/>
                                </div>
                        </div>
                </div>


                <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label" id='email'>Your Email</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                        </div>
                </div>


                <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Age</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
                                        <input type="number" class="form-control" name="username" id="age"  placeholder="Enter Patient's Age"/>
                                </div>
                        </div>
                </div>


                <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Gender</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="username" id="gender"  placeholder="Enter Patient's Gender"/>
                                </div>
                        </div>
                </div>



                <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                        </div>
                </div>


                <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirm" id="cpassword"  placeholder="Confirm your Password"/>
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Enter Reference Code</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="refcode" id="refcode"  placeholder="Enter Reference Code"/>
                                </div>
                        </div>
                </div>

                <div class="form-group" align="center">
                    <hr>
                        <!--CHECKBOX & BUTTON.. DIDNT INTEGRATE YET, I'm terrible with backend. --> 
                        <input type="checkbox" name="terms"> I accept Terms and Conditions
                        <br>
                        <button type="submit" class="btn btn-info btn-lg">Register!</button>
                    </div>
        </form>
        </div>
    
        
    <div id="message" class="bg-danger">
        
        <?php $message ='';?>
        <?php echo $message;?>
    </div> 
</div>
<?php include '../view/footer.php';?>

