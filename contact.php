<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<head>
        <title>Car Parking Management System</title>
        <link rel="stylesheet" type="text/css" href="styles/style_index.css">

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="assets/logos/title_icon.png" type="image/icon type">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <!--Navbar-->
        <nav>
        <?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		if(isset($_SESSION['phone']))
			{
				
				
				} 
			else
			{
				//header("Location: index.php");
			}
}
 ?>
            <ul class="menu-bar">
                <div class="logo">
                    <a href="index.php">
                        <i class="material-icons">directions_car</i>Book ur slot
                    </a>
                </div>
                <li><a href="index.php">Home</a></li>
                <li><a href="zones.php">Parking zones</a></li>
                <li><a href="map4.php">Navigation</a></li>
                <?php
				if(isset($_SESSION['phone']))
				{
				?>
                <li><a href="proc/check_book.php">Book Parking Lot</a></li>
                <li><a href="unbook.php">Unbook Parking LOt</a></li>
                <?php } ?>
                <li><a href="contact.php">Contact US</a></li>
                
            </ul>
        </nav>
		<div class="container">
	<br>
	<section id="content">
	<style>
    /* Form container */
    .contact-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    /* Heading */
    .phead {
        font-size: 24px;
        font-weight: bold;
        color: #333333;
        margin-bottom: 20px;
    }

    /* Form label */
    label {
        display: block;
        text-align: left;
        margin-bottom: 10px;
        color: #555555;
    }

    /* Input fields and textarea */
    input[type="text"],
    textarea {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    /* Input field and textarea hover effect */
    input[type="text"]:hover,
    textarea:hover {
        border-color: #999999;
    }

    /* Submit button */
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: #ffffff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Submit button hover effect */
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="contact-form">
    <p class="phead">Contact Us</p>
    <form id="contact_form" action="proc/contact.php" method="POST" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" name="name" value="" required>
    <label for="phone">Your Phone:</label>
    <input type="text" name="phone" value="" required>
    <label for="msg">Your message:</label>
    <textarea name="msg" rows="4" required></textarea>
    <input type="submit" name="submit" value="Submit">
</form>

<script>
function validateForm() {
    var phone = document.forms["contact_form"]["phone"].value;
    
    // Phone number validation
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
        alert("Phone number should be 10 digits only.");
        return false;
    }

    return true;
}
</script>

</div>
</div>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>