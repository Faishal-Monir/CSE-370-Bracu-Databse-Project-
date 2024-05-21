<?php
require_once '../../dbconnect.php';

if(isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    if($user_id == -1) {
        echo "Super admin cannot be deleted.";
        header("Location: users.php");
        exit();
    }

    
    $sql_delete_auth = "DELETE FROM Authentication WHERE User_id='$user_id'";
    if(!mysqli_query($conn, $sql_delete_auth)) {
        echo "Error deleting user from Authentication table: " ;
    }

    
    $sql_delete_doctor = "DELETE FROM Doctor WHERE User_id='$user_id'";
    if(mysqli_query($conn, $sql_delete_doctor)) {
        echo "Deleted" ;
    }

    
    $sql_delete_staff = "DELETE FROM Staff WHERE User_id='$user_id'";
    if(mysqli_query($conn, $sql_delete_staff)) {
        echo "Deleted" ;
    }

    
    $sql_delete_others = "DELETE FROM Others WHERE User_id='$user_id'";
    if(mysqli_query($conn, $sql_delete_others)) {
        echo "Deleted" ;
    }

    
    $sql_delete_patient = "DELETE FROM Patient WHERE User_id='$user_id'";
    if(mysqli_query($conn, $sql_delete_patient)) {
        echo "Deleted" ;
    }

    
    $sql_delete_admin = "DELETE FROM Admin WHERE User_id='$user_id'";
    if(mysqli_query($conn, $sql_delete_admin)) {
        echo "Deleted" ;
    }

    
    $sql_delete_user = "DELETE FROM Users WHERE user_id='$user_id'";
    if(mysqli_query($conn, $sql_delete_user)) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error deleting user from Users table: " . mysqli_error($conn);
    }
} else {
    echo "Please provide a user ID.";
}
?>
