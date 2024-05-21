<?php
require_once '../../dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cost = $_POST['cost'];
    $coverageArea = $_POST['coverage_area'];
    
    
    $newId = 1;
    $maxIdQuery = "SELECT MAX(ID) AS max_id FROM Ambulance";
    $result = mysqli_query($conn, $maxIdQuery);
    if ($row = mysqli_fetch_assoc($result)) {
        $newId = $row['max_id'] + 1;
    }

    
    $adminUserId = "-1"; // super admin id 

    
    $insertQuery = "INSERT INTO Ambulance (ID, Cost, Coverage_area, Admin_user_id) 
                    VALUES ('$newId', '$cost', '$coverageArea', '$adminUserId')";
    
    
    if (mysqli_query($conn, $insertQuery)) {
        
        header("Location: ambulance.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
