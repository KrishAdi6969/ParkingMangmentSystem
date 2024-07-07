<!DOCTYPE html>

<html lang="en">
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
                        <i class="material-icons">restaurant_menu</i>this is ur admin
                    </a>
                </div>
                <li><a href="index.php">Users</a></li>
                <li><a href="bookings.php">Bookings</a></li>
                
                <li><a href="transactions.php">Transactions</a></li>
                <li><a href="messages.php">Messages</a></li>
                <?php if ($_SESSION['access']==0)  {  ?>
                <li><a href="manage.php">Manage Admins</a></li>
                <?php  } ?>	
            </ul>
        </nav>

        <!--Welcome Content-->
        <div class="container">
            <table>
                <tr>
                    <td>
                        <h1>Learn. Cook. Share.<br>Cooking Made Easy.</h1>
                        <p>Say good bye to long and frustrating food blogs and recipe videos.<br>Access our recipe cards to prepare any dish in minutes.</p>
                        
                    </td>
                    <td>
                        <img src="assets/main/main_plate.png">
                    </td>
                </tr>
            </table>

        </div>
        
            <p>© 2022 All Rights Reserved, <a href="index.html" style="color: white; font-weight: bold;">Dish A Day</a></p>
        </div>
        <script src="js/index_logic.js"></script>
    </body>
</html>