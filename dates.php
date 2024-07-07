<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Booking Date & Time</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <?php include('inc/head.php'); ?>
    <link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
    <script>
        window.addEvent('domready', function(){
            new Picker.Date($$('INPUT'), {
                timePicker: true,
                positionOffset: {x: 5, y: 0},
                pickerClass: 'datepicker_bootstrap',
                useFadeInOut: !Browser.ie,
                format: '%Y-%m-%d %H:%M' // Format for 24-hour clock without AM or PM
            });

            // Validation function to check if "from" is less than "to" and difference is <= 10 hours
            function validateDateTime() {
                var fromDate = new Date(document.getElementsByName('from')[0].value);
                var toDate = new Date(document.getElementsByName('to')[0].value);
                var currentTime = new Date(); // Get current date and time

                // Check if fromDate is in the past
                if (fromDate < currentTime) {
                    alert("Error: 'From' date and time cannot be in the past.");
                    return false;
                }

                // Check if fromDate is less than toDate
                if (fromDate >= toDate) {
                    alert("Error: 'From' date and time must be before 'To' date and time.");
                    return false;
                }

                // Calculate difference in hours
                var diffInMs = toDate - fromDate;
                var diffInHours = diffInMs / (1000 * 60 * 60);

                // Check if difference is greater than 10 hours
                if (diffInHours > 10) {
                    alert("Error: Difference between 'From' and 'To' must be maximum 10 hours.");
                    return false;
                }

                return true;
            }

            // Attach validation function to form submit event
            document.querySelector('form').addEventListener('submit', function(event) {
                if (!validateDateTime()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                }
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
                </section>
                </br>
                

                

                <style>
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

   strong {
      font-size: 18px;
      background: linear-gradient(to bottom, #00bfff 50%, #0099cc 50%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-fill-color: transparent;
    }

   input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      background-color: rgba(0, 0, 0, 0.8); /* black background */
      color: #fff; /* white text */
      font-size: 16px;
    }

   input[type="text"]:focus {
      background-color: rgba(255, 255, 255, 0.5);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      border: 1px solid #66cc00; /* green border */
    }

  .btnLogin {
      background-color: #ff9900; /* orange background */
      color: #fff; /* white text */
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      margin-top: 20px;
    }

  .btnLogin:hover {
      background-color: #ffa07a; /* light orange background */
    }
  </style>

  <form action="process-book-3.php" method="post" onsubmit="return validateDateTime();">
    <fieldset>
        <label><strong>Specify Date and time to book</strong></label>
        <label>From:</label>
        <input type="text" name="from" value="2024-04-29 11:05">
        <label>To:</label>
        <input type="text" name="to" value="2024-04-29 21:05">
    </fieldset>
    <input type="submit" class="btnLogin" value="Book" tabindex="4">
  </form>

        </section>
                </div>
        <?php include('inc/footer.php'); ?>
    </section>
</body>
</html>
