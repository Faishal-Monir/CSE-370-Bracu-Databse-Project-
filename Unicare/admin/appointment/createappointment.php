<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $doc_id = $_POST['doc_id'];
    $status = $_POST['status'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $admin_user_id = $_POST['admin_user_id'];

    
    $sql_check_doc = "SELECT name FROM Users WHERE user_id = $doc_id";
    $result_check_doc = mysqli_query($conn, $sql_check_doc);

    if ($result_check_doc && mysqli_num_rows($result_check_doc) > 0) {
        $row = mysqli_fetch_assoc($result_check_doc);
        $name = $row['name'];

    
        $insert_sql = "INSERT INTO Appointment (Doc_id, Status, Date, Time, Name, Admin_user_id) VALUES ($doc_id, $status, '$date', '$time', '$name', $admin_user_id)";
        
        if (mysqli_query($conn, $insert_sql)) {
            echo "Appointment created successfully.";

       
            $update_sql = "UPDATE Doctor SET Admin_user_id = $admin_user_id WHERE User_id = $doc_id";
            
            if (mysqli_query($conn, $update_sql)) {
                echo "Admin user ID updated in Doctor table.";
                header("Location: appointment.php");
                exit(); 
            } else {
                echo "Error updating admin user ID in Doctor table: " . mysqli_error($conn);
            }
        } else {
            echo "Error creating appointment: " . mysqli_error($conn);
        }  
    } else {
        echo "Doctor does not exist.";
    }
}

?>
