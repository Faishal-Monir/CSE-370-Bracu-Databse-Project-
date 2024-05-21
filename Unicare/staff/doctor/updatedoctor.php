<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $user_id = $_POST['user_id'];
    $fee = $_POST['fee'];
    $specialization = $_POST['specialization'];
    $admin_user_id = $_POST['admin_user_id'];
    $new_name = $_POST['name'];
    
    $update_name_sql = "UPDATE Users SET name = '$new_name' WHERE user_id = $user_id";
    if (mysqli_query($conn, $update_name_sql)) {
        echo "Name updated successfully.";
    } else {
        echo "Error updating name: " . mysqli_error($conn);
    }

    $update_appointment_name_sql = "UPDATE Appointment SET Name = '$new_name' WHERE Doc_id = $user_id";
    if (mysqli_query($conn, $update_appointment_name_sql)) {
        echo "Name updated in Appointment table successfully.";
    } else {
        echo "Error updating name in Appointment table: " . mysqli_error($conn);
    }

    $update_sql = "UPDATE Doctor SET Fee = $fee, Specialization = '$specialization', Admin_user_id = $admin_user_id WHERE User_id = $user_id";
    
    if (mysqli_query($conn, $update_sql)) {
        echo "Doctor updated successfully.";

 
        $update_admin_sql = "UPDATE Appointment SET Admin_user_id = $admin_user_id WHERE Doc_id = $user_id";
        mysqli_query($conn, $update_admin_sql);

        header("Location: doctor.php");
        exit(); 
    } 
    else {
        echo "Error updating doctor: " . mysqli_error($conn);
    }  
}

?>
