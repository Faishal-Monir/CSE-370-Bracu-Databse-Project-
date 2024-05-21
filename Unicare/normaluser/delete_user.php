<?php
include '../dbconnect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user id from session
    $user_id = $_SESSION['user_id'];
    

    $query_others = "DELETE FROM Others WHERE User_id = '$user_id'";
    $result_others = mysqli_query($conn, $query_others);

    // Delete user from Authentication table
    $query_auth = "DELETE FROM Authentication WHERE User_id = '$user_id'";
    $result_auth = mysqli_query($conn, $query_auth);
    
    // Delete user from Users table
    $query_users = "DELETE FROM Users WHERE user_id = '$user_id'";
    $result_users = mysqli_query($conn, $query_users);


    // Delete user from Others table if necessary
    // (Assuming you want to delete from the Others table as well)

    if ($result_users && $result_auth) {
        // Redirect to homepage or any other page after successful deletion
        header("location: ../signout.php");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
