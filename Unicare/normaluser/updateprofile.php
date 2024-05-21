<?php
session_start(); // Ensure session is started

include '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_id = $_SESSION['user_id'];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    // Update user details in the database
    $query = "UPDATE Users 
              SET name = '$name', age = '$age', address = '$address'
              WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);

    $query_auth = "UPDATE Authentication 
                   SET user_email = '$email', mobile = '$mobile', password = '$password'
                   WHERE User_id = '$user_id'";
    $result_auth = mysqli_query($conn, $query_auth);

    if ($result && $result_auth) {
        // Redirect to view profile page
        header("location: view_profile.php");
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
