<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ID = $_POST['ID'];

    
    $deleteQuery = "DELETE FROM Ambulance WHERE ID = '$ID'";

    
    if (mysqli_query($conn, $deleteQuery)) {
        header("Location: ambulance.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
