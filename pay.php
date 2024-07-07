<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pay | Car Park Management System</title>
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
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div>
		<p class="phead">Pay Parking Fees</p>
		<<style>
    /* Section styling */
    .parking {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Ordered list styling */
    .parking ol {
        list-style-type: decimal;
        padding-left: 20px;
        font-size: 16px;
        color: #333333;
    }

    /* List item styling */
    .parking ol li {
        margin-bottom: 15px;
    }

    /* Link styling */
    .parking a {
        display: inline-block;
        padding: 12px 24px;
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        background-color: #4CAF50;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    /* Link hover effect */
    .parking a:hover {
        background-color: #45a049;
    }
</style>

<section class="parking">
    <ol>
        <li>Go to M-Pesa on your phone</li>
        <li>Select Pay Bill</li>
        <li>Enter Business no: 123123</li>
        <li>Enter your phone no as the account number</li>
        <li>Enter amount Ksh. 130</li>
        <li>Enter your pin no and confirm</li>
        <li>Then click the Finish button below to complete your booking.</li>
    </ol>
    <a href="success.php">Finish</a>
</section>

	</div>
				</div>
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>