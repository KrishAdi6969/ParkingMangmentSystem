<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	
</head>
<head>
        <link rel="stylesheet" type="text/css" href="styles/style_index.css">

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="assets/logos/title_icon.png" type="image/icon type">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
<body>
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
		<div class="container"></br>
        <div>
		<style>
    /* Form container */
    form {
        max-width: 400px;
        margin: 40px auto;
        padding: 55px;
        background-color: #000;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(300, 300, 300, 0.1);
        animation: fade-in 1s ease-in-out;
    }

    /* Form label */
    label {
        display: block;
        margin-bottom: 5px;
        font-size: 16px;
        color: #fff;
    }

    /* Input fields */
    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 30px;
        border: none;
        border-radius: 5px;
        background-color: #333;
        color: #fff;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    /* Input field focus effect */
    input[type="text"]:focus,
    select:focus {
        border-color: #aaa;
        box-shadow: 0 0 10px rgba(300, 300, 300, 0.3);
    }

    /* Submit button */
   .btnLogin {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        background-color: #337ab7;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Submit button hover effect */
   .btnLogin:hover {
        background-color: #23527c;
    }

    /* Animation */
    @keyframes fade-in {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Alignment */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        text-align: left;
    }

    .form-group input[type="text"],
    .form-group select {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        background-color: #333;
        color: #fff;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-group input[type="text"]:focus,
    .form-group select:focus {
        border-color: #aaa;
        box-shadow: 0 0 10px rgba(300, 300, 300, 0.3);
    }

    /* Vehicle Type select element color */
    .cjComboBox {
        color: #fff;
    }

    /* Vehicle Type select element option color */
    .cjComboBox option {
        color: #fff;
    }
</style>

<form action="process-book-1.php" method="post">
    <h2>Describe your Vehicle</h2>
    <hr>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" tabindex="1" name="model" id="model" placeholder="eg. Toyota Allion" required>
    </div>
    <div class="form-group">
        <label for="vehicle">Vehicle Type</label>
        <select name="vehicle" class="cjComboBox" id="vehicle">
            <option value="car">Car</option>
            <option value="lorry">Bus</option>
            <option value="trailer">Cycle</option>
            <option value="trailer">Bike</option>
        </select>
    </div>
    <input type="submit" class="btnLogin" value="Proceed" tabindex="4">
    <?php //Values?>
</form>
</div>
	</section>
</br>
	<?php
			include('inc/footer.php');
	?>
	</section>
				
	
</body>
</html>