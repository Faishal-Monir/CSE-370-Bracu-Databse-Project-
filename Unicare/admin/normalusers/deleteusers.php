<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];

    $delete_sql = "DELETE FROM Others WHERE User_id = $user_id";

    if (mysqli_query($conn, $delete_sql)) {
        echo "User deleted successfully.";

        header("Location: users.php"); 
        exit(); 
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }  
}

?>
