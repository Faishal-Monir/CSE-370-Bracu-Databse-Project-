<?php
require_once '../../dbconnect.php';

if(isset($_POST['user_id'],$_POST['name'], $_POST['age'], $_POST['address'], $_POST['mobile'], $_POST['user_email'], $_POST['password'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    $sql_update_user = "UPDATE Users SET name='$name', age='$age', address='$address' WHERE user_id='$user_id'";
    $sql_update_auth = "UPDATE Authentication SET mobile='$mobile', user_email='$user_email', password='$password' WHERE User_id='$user_id'";

    if(mysqli_query($conn, $sql_update_user) && mysqli_query($conn, $sql_update_auth)) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
} else {
    echo "Please fill out all required fields.";
}
?>
