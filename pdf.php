<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('inc/connect.php');

class PDF
{
    // Page header
    function Header()
    {
        // Title
        echo '<h1 style="text-align: center; color: #007bff;">VALEMAX CAR PARK</h1>';
        echo '<h3 style="text-align: center; color: #555;">RECEIPT</h3>';
        echo '<hr style="border-color: #007bff;">'; // Add a horizontal line
    }

    // Page footer
    function Footer()
    {
        // Page number
        echo '<div style="text-align: center; color: #777;">Page {PAGENO}</div>';
    }
}

$phone = $_SESSION['phone'];
$sql = "SELECT * FROM zones WHERE phone='$phone' AND status='RESERVED' ORDER BY id DESC LIMIT 1"; // Modified SQL query to select the record with the maximum ID
$result = mysqli_query($connect, $sql);

if ($row = mysqli_fetch_array($result)) {
    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->Header();
    echo '<div style="display: flex; justify-content: center;">'; // Center the box horizontally
    echo '<div style="border: 2px solid #007bff; padding: 20px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">'; // Add a border box
    // Display receipt content
    echo '<p style="font-weight: bold; color: #555;">Date: ' . $row['d1'] . '</p>';
    echo '<p style="font-weight: bold; color: #555;">Number Plate: ' . $row['platenumber'] . '</p>';
    echo '<p style="font-weight: bold; color: #555;">Confirmation Code: ' . $row['account'] . '</p>';
    echo '<p style="font-weight: bold; color: #555;">Amount: 120/-</p>';
    // Additional details
    echo '<p style="font-weight: bold; color: #555;">Street: ' . $row['street'] . '</p>';
    echo '<p style="font-weight: bold; color: #555;">Plot: ' . $row['plot'] . '</p>';
    echo '<p style="font-weight: bold; color: #555;">Model: ' . $row['model'] . '</p>';
    echo '<p style="font-weight: bold; color: #555;">Vehicle: ' . $row['vehicle'] . '</p>';
    echo '</div>'; // Close the border box
    echo '</div>'; // Close the flex container
    $pdf->Footer();
} else {
    echo "No records found.";
}
?>
