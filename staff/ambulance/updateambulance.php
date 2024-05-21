<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $ID = $_POST['ID'];
    $cost = $_POST['cost'];
    $coverageArea = $_POST['coverage_area'];
    $adminUserId = $_POST['Admin_user_id'];

    // Update query
    $updateQuery = "UPDATE Ambulance SET Cost = '$cost', Coverage_area = '$coverageArea', Admin_user_id = '$adminUserId' WHERE ID = '$ID'";

    // Execute the query
    if (mysqli_query($conn, $updateQuery)) {
        header("Location: ambulance.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
