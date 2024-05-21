<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $user_id = $_POST['user_id'];
    $fee = $_POST['fee'];
    $specialization = $_POST['specialization'];
    $admin_user_id = $_POST['admin_user_id'];

    $insert_sql = "INSERT INTO Doctor (User_id, Fee, Specialization, Admin_user_id) VALUES ($user_id, $fee, '$specialization', $admin_user_id)";
        
    if (mysqli_query($conn, $insert_sql)) {
        echo "Doctor created successfully.";

        $update_admin_sql = "UPDATE Appointment SET Admin_user_id = $admin_user_id WHERE Doc_id = $user_id";
        mysqli_query($conn, $update_admin_sql);

        header("Location: doctor.php");
        exit(); 
    } 
    else {
        echo "Error: " . mysqli_error($conn);
    }  
}

?>
