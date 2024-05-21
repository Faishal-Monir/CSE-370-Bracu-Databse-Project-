<?php

require_once '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $user_id = $_POST['user_id'];

    $delete_appointments_sql = "DELETE FROM Appointment WHERE Doc_id = $user_id";
    if (mysqli_query($conn, $delete_appointments_sql)) {
        $delete_sql = "DELETE FROM Doctor WHERE User_id = $user_id";
    
        if (mysqli_query($conn, $delete_sql)) {
            echo "Doctor deleted successfully.";

            header("Location: ../signout.php");
            exit(); 
        } 
        else {
            echo "Error: " . mysqli_error($conn);
        }  
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>