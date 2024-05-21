<?php
require_once 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $user_email = $_POST['user_email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $max_id_query = "SELECT MAX(user_id) AS max_id FROM Users";
    $result = mysqli_query($conn, $max_id_query);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['max_id'] + 1;


    $bloodbank_id = 'NULL';
    $admin_user_id = -1;

    $insert_user_query = "INSERT INTO Users (user_id, name, age, address) VALUES ($user_id, '$name', $age, '$address')";
    mysqli_query($conn, $insert_user_query);

    $insert_auth_query = "INSERT INTO Authentication (User_id, mobile, user_email, password) VALUES ($user_id, '$mobile', '$user_email', '$password')";
    mysqli_query($conn, $insert_auth_query);


    if ($user_type == 'patient') {

        $insert_patient_query = "INSERT INTO Patient (User_id,Admin_user_id) VALUES ($user_id,$admin_user_id)";
        mysqli_query($conn, $insert_patient_query);
    } elseif ($user_type == 'normal') {
      
        $insert_others_query = "INSERT INTO Others (User_id, Bloodbank_id, Admin_user_id) 
                                VALUES ($user_id, $bloodbank_id, $admin_user_id)";
        mysqli_query($conn, $insert_others_query);
    }

    header("Location: verify.php");
    exit();
}
?>
