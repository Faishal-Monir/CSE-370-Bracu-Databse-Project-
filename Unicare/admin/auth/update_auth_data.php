<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['user_id'])) {

    $user_id = $_POST['user_id'];
    $mobile = $_POST['mobile'];
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    if (!empty($mobile) || !empty($user_email) || !empty($password)) {

        
        $updateQuery = "UPDATE Authentication SET mobile = '$mobile', user_email = '$user_email', password = '$password' WHERE User_id = '$user_id'";

        if (!mysqli_query($conn, $updateQuery)) {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    header("Location: auth_home.php");
    exit();
} else {
    header("Location: auth_home.php");
    exit();
}
?>