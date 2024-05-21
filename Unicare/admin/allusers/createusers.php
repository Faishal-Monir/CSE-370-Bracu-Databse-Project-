<?php
require_once '../../dbconnect.php';


if(isset($_POST['name'], $_POST['age'], $_POST['address'], $_POST['mobile'], $_POST['user_email'], $_POST['password'])) {

    $sql_max = "SELECT MAX(user_id) AS max_id FROM Users";
    $result_max = mysqli_query($conn, $sql_max);
    $row_max = mysqli_fetch_assoc($result_max);
    $next_user_id = $row_max['max_id'] + 1;
    
 
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    $sql_user = "INSERT INTO Users (user_id, name, age, address) VALUES ('$next_user_id', '$name', '$age', '$address')";

    if(mysqli_query($conn, $sql_user)) {
        $sql_auth = "INSERT INTO Authentication (User_id, mobile, user_email, password) VALUES ('$next_user_id', '$mobile', '$user_email', '$password')";
        if(mysqli_query($conn, $sql_auth)) {
            
            header("Location: users.php");
            exit();
        } else {
            echo "Error creating authentication data: " . mysqli_error($conn);
        }
    } else {
        echo "Error creating user: " . mysqli_error($conn);
    }
} else {
    echo "Please fill out all required fields.";
}
?>
