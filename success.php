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
	
		<style>
    /* Styling for the container */
   

    /* Styling for the heading */
    vhead {
        display: block;
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: bold;
        color: #ffffff;
        text-transform: uppercase;
    }

    /* Styling for the success message */
    p {
        margin-bottom: 30px;
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
    }

    /* Styling for the link */
    .unbook {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        color: #ffffff;
        background-color: #4CAF50;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    /* Styling for the link hover effect */
    .unbook:hover {
        background-color: #45a049;
    }
</style>


    <vhead>Operation Successful</vhead>
    <p>Your Booking Has Been Recorded<br></P>
    <a target="_blank" href="pdf.php" class="unbook">Print Receipt</a>
</div>

	</div></div>
	<?php
			include('inc/footer.php');
	?>
	</body>

</html>