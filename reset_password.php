<?php
// Start session and include necessary files
session_start();
include('inc/connect.php');

// Initialize variables for error message
$old_password_err = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $phone = $_POST['phone'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Query to check if old password matches
    $check_query = "SELECT * FROM users WHERE phone = '$phone' AND password = '$old_password'";
    $result = mysqli_query($connect, $check_query);

    // Check if old password matches
    if (mysqli_num_rows($result) == 1) {
        // Password matches, update password
        $update_query = "UPDATE users SET password = '$new_password' WHERE phone = '$phone'";
        
        // Execute update query
        
if (mysqli_query($connect, $update_query)) {
    echo '<script>alert("Password updated successfully.");</script>';
} else {
    echo '<script>alert("Error updating password: ' . mysqli_error($connect) . '");</script>';
}


    } else {
        // Old password doesn't match, display error message
        $old_password_err = "Incorrect old password.";
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Reset Password</title>
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
	
	<div id="container">
        <h2>Reset Password</h2>
        <style>
    /* Form container */
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    /* Labels */
    label {
        display: inline-block;
        width: 120px;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333333;
    }

    /* Input fields */
    input[type="text"],
    input[type="password"] {
        width: calc(100% - 140px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    /* Input field hover effect */
    input[type="text"]:hover,
    input[type="password"]:hover {
        border-color: #999999;
    }

    /* Error message */
    .error {
        color: #ff0000;
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required><br><br>
    <label for="old_password">Old Password:</label>
    <input type="password" id="old_password" name="old_password" required>
    <span class="error"><?php echo $old_password_err; ?></span><br><br>
    <label for="new_password">New Password:</label>
    <input type="password" id="new_password" name="new_password" required><br><br>
    <input type="submit" value="Reset Password">
</form>

    </div></div>
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>