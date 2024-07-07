<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
include('inc/head.php');
include('inc/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $from = $_POST['from'];
    $to = $_POST['to'];

    // Convert the date format if needed
    // (assuming the format is already in 'Y-m-d H:i:s' format)
    // $from = date('Y-m-d H:i:s', strtotime($_POST['from']));
    // $to = date('Y-m-d H:i:s', strtotime($_POST['to']));

    // SQL query to check reservations within the specified time slot
    $sql = "SELECT * FROM zones WHERE (d1 <= '$from' AND d2 >= '$to') OR (d1 >= '$from' AND d1 <= '$to') OR (d2 >= '$from' AND d2 <= '$to')";
    $result = mysqli_query($connect, $sql);
}
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
        <div class="container">
        
		
       
        <p>Parking Lots Status</p>
        <p>To show all the reserved plots at that time slot</P>
		<style>
    /* Style for labels */
    label {
        display: inline-block;
        width: 80px; /* Adjust the width as needed */
        margin-right: 10px;
    }

    /* Style for input fields */
    input[type="text"] {
        width: 200px; /* Adjust the width as needed */
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    /* Style for submit button */
    input[type="submit"] {
        padding: 8px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Style for submit button on hover */
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form method="post" action="">
    <!-- Add input fields for "From" and "To" time -->
    <label>From:</label>
    <input type="text" name="from" value="<?php echo isset($_POST['from']) ? $_POST['from'] : ''; ?>"><br>
    <label>To:</label>
    <input type="text" name="to" value="<?php echo isset($_POST['to']) ? $_POST['to'] : ''; ?>"><br>
    <input type="submit" value="Check Availability">
</form></br>


        <style>
    .red-table {
        border-collapse: collapse;
        width: 100%;
        color: white;
        background-color: red; /* Set the background color to red */
    }
    .red-table th, .red-table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

<div>
    <table class="gridtable red-table"> <!-- Add the red-table class here -->
        <?php $street = "CITY HALL"; ?>
        <!-- Display the results -->
        <?php
        if (isset($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['plot'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['street'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</div>

<div>
    <table class="gridtable red-table"> <!-- Add the red-table class here -->
        <?php $street = "KIJABE STREET"; ?>
        <!-- Display the results -->
        <?php
        if (isset($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['plot'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['street'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    </br>
    <a href="streetlayout.php" style="font-weight: bold; color: red;">View Street Layout</a>
</div>

        </div>
		

        </div>
    </section>

    <?php
    include('inc/footer.php');
    ?>
</section>
</body>
</html>
