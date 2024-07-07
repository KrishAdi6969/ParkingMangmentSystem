<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
	<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
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
	
        <section id="content">
				</br>
				

                

                <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    form {
      width: 400px;
      margin: 40px auto;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8); /* black background */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      transition: all 0.3s ease-in-out;
    }

    form:hover {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
      transform: scale(1.01);
    }

    fieldset {
      border: none;
      padding: 0;
      margin: 0;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #fff; /* white text */
    }

    label strong {
      font-size: 18px;
      background: linear-gradient(to bottom, #00bfff 50%, #0099cc 50%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-fill-color: transparent;
    }

    hr {
      border: none;
      border-top: 2px solid #ff0000; /* red border */
      margin: 20px 0;
    }

    select, input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      background-color: rgba(0, 0, 0, 0.8); /* black background */
      color: #fff; /* white text */
      font-size: 16px;
    }

    select:focus, input[type="text"]:focus {
      background-color: rgba(255, 255, 255, 0.5);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      border: 1px solid #66cc00; /* green border */
    }

    button[type="button"] {
      background-color: #0099cc; /* blue background */
      color: #fff; /* white text */
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    button[type="button"]:hover {
      background-color: #00bfff; /* light blue background */
    }

    input[type="submit"] {
      background-color: #ff9900; /* orange background */
      color: #fff; /* white text */
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      margin-top: 20px;
    }

    input[type="submit"]:hover {
      background-color: #ffa07a; /* light orange background */
    }

    form {
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;transform: scale(0.9);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>

  <form action="process-book-2.php" method="post">
    <fieldset>
      <label><strong>Parking Details</strong></label>
      <hr>
      <label>Recommended Region For You - as per your vehicle's body size</label>
      <select name="street" style="background-color: #000; color: #fff;">
        <option value="AB1" style="background-color: #000; color: #fff;">AB1</option>
        <option value="AB3" style="background-color: #000; color: #fff;">AB3</option>
      </select>

      <select name="plot" style="background-color: #000; color: #fff;">
        <option value="PL 001" style="background-color: #000; color: #fff;">PL 001</option>
        <option value="PL 002" style="background-color: #000; color: #fff;">PL 002</option>
        <option value="PL 003" style="background-color: #000; color: #fff;">PL 003</option>
        <option value="PL 004" style="background-color: #000; color: #fff;">PL 004</option>
        <option value="PL 005" style="background-color: #000; color: #fff;">PL 005</option>
        <option value="PL 006" style="background-color: #000; color: #fff;">PL 006</option>
        <option value="PL 007" style="background-color: #000; color: #fff;">PL 007</option>
        <option value="PL 008" style="background-color: #000; color: #fff;">PL 008</option>
        <option value="PL 009" style="background-color: #000; color: #fff;">PL 009</option>
        <option value="PL 010" style="background-color: #000; color: #fff;">PL 010</option>
        <option value="PL 011" style="background-color: #000; color: #fff;">PL 011</option>
        <option value="PL 012" style="background-color: #000; color: #fff;">PL 012</option>
      </select>

      <label>Plate Number</label>
      <input type="text" tabindex="3" name="plateno" placeholder="eg. KAC 123" 
      pattern="[A-Za-z]{2}\d{2}[A-Za-z]{2}\d{4}" 
      title="Plate number should be of the format: first 2 alphabets, 2 digits, 2 alphabets, and 4 numbers." 
      required style="background-color: #000; color: #fff;">

      <label><strong>Payment Information</strong></label>
      <hr>
      <button type="button" onclick="window.open('Payment2/index.php', '_blank')">Payment</button></br></br>
      <label>Enter Payment confirmation code</label>
      <input type="text" name="account" placeholder="Confirmation Number" required title="Credit card number" maxlength="14" style="background-color: #000; color: #fff;"/>

      <label style="background: linear-gradient(to bottom, #00bfff 50%, #0099cc 50%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-fill-color: transparent;">Note: Parking Fees: 120 </label>
</fieldset>

    <input type="submit" value="Proceed to Date & Time" tabindex="4">
  </form>


	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>