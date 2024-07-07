<?php
require('inc\connect.php');
session_start();

$email = $_SESSION["email"];
$model = $_SESSION["model"];
$vehicle = $_SESSION["vehicle"];
$status = "RESERVED";
$plateno = $_SESSION["plateno"];
$plot = $_SESSION["plot"];
$account = $_SESSION["account"];
$street = $_SESSION["street"];
$from = $_SESSION["from"];
$to = $_SESSION["to"];
$charge = "120";
$phone = $_SESSION["phone"];

// Check if the plot is already reserved for the specified time slot
$sql = "SELECT * FROM zones 
        WHERE street='$street' 
        AND plot='$plot' 
        AND (
            (d1 <= '$from' AND d2 >= '$from') OR 
            (d1 <= '$to' AND d2 >= '$to') OR 
            (d1 >= '$from' AND d2 <= '$to')
        )";
$result = mysqli_query($connect, $sql);

// Check if any rows are returned, indicating that the plot is already reserved
if (mysqli_num_rows($result) > 0) {
    header('location:error-book.php'); // Redirect to error page
    exit;
} else {
    $query = "INSERT INTO `zones` (phone,status, email, model, vehicle, street, plot, platenumber, account, charge, d1, d2) 
              VALUES ('$phone','$status', '$email', '$model', '$vehicle', '$street', '$plot', '$plateno', '$account','$charge','$from','$to')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        // Redirect to success page
        header('location:success.php');
        exit;
    }
}
?>
