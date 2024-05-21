<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $doc_id = $_POST['doc_id'];
    $status = $_POST['status'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $admin_user_id = $_POST['admin_user_id'];

    $update_sql = "UPDATE Appointment SET Status = $status, Date = '$date', Time = '$time', Admin_user_id = $admin_user_id WHERE Doc_id = $doc_id";
    
    if (mysqli_query($conn, $update_sql)) {
        echo "Appointment updated successfully.";


        $update_doctor_sql = "UPDATE Doctor SET Admin_user_id = $admin_user_id WHERE User_id = $doc_id";

        if (mysqli_query($conn, $update_doctor_sql)) {
            echo "Admin user ID updated in Doctor table.";
        } else {
            echo "Error updating admin user ID in Doctor table: " . mysqli_error($conn);
        }

        header("Location: appointment.php");
        exit(); 
    } else {
        echo "Error: " . $update_sql . "<br>" . mysqli_error($conn);
    }  
}

?>
