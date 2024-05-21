<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $bloodbank_id = $_POST['bloodbank_id'];
    $admin_user_id = $_POST['admin_user_id'];
    
    $update_name_sql = "UPDATE Users SET name = '$name' WHERE user_id = $user_id";
    if (mysqli_query($conn, $update_name_sql)) {
        echo "Name updated successfully.";
    } else {
        echo "Error updating name: " . mysqli_error($conn);
    }

    $update_sql = "UPDATE Others SET Bloodbank_id = $bloodbank_id, Admin_user_id = $admin_user_id WHERE User_id = $user_id";
    
    if (mysqli_query($conn, $update_sql)) {
        echo "User updated successfully.";
        header("Location: users.php");
        exit(); 
    } 
    else {
        echo "Error updating user: " . mysqli_error($conn);
    }  
}

?>
