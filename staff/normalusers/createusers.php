<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $bloodbank_id = $_POST['bloodbank_id']; 
    $admin_user_id = $_POST['admin_user_id'];

    $insert_sql = "INSERT INTO Others (User_id, Bloodbank_id, Admin_user_id) VALUES ($user_id, $bloodbank_id, $admin_user_id)";
        
    if (mysqli_query($conn, $insert_sql)) {
        echo "User created successfully.";
        header("Location: users.php"); 
        exit(); 
    } else {
        echo "Error creating user: " . mysqli_error($conn);
    }  
}
?>
