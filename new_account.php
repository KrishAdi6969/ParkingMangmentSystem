<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
			include('inc/css1.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
	?>
	
	<section id="content">
	
		<div class="left-signup">
		</div>
		<div class="left-signup">
		<p class="head">New Account Registration</p>
		<form id="registration" action="proc/reg.php" method="post" onsubmit="return validateForm()">
    <input type="text" name="fname" placeholder="First Name" required/>
    <input type="text" name="lname" placeholder="Last Name" required/>
    <input type="text" name="email" placeholder="Email Address" required/>
    <input type="text" name="phone" placeholder="Phone Number" required/>
    <input type="password" name="password" placeholder="Password" required/>
    <input type="text" name="plate" placeholder="Car No." required/>
    <input type="Submit" name="Submit" value="Create Account"/>
</form>

<script>
function validateForm() {
    var email = document.forms["registration"]["email"].value;
    var phone = document.forms["registration"]["phone"].value;
    var plate = document.forms["registration"]["plate"].value;
    
    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Phone number validation
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
        alert("Phone number should be 10 digits only.");
        return false;
    }

    // Car number validation
    var plateRegex = /^[A-Za-z]{2}\d{2}[A-Za-z]{2}\d{4}$/;
    if (!plateRegex.test(plate)) {
        alert("Car number should be of the format: first 2 alphabets, 2 digits, 2 alphabets, and 4 numbers.");
        return false;
    }

    return true;
}
</script>

		</div>
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
</body>
</html>