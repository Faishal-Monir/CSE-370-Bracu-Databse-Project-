<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];

    $delete_sql = "DELETE FROM Staff WHERE User_id = $user_id";

    if (mysqli_query($conn, $delete_sql)) {
        echo "Staff deleted successfully.";
        header("Location: staff.php");
        exit();
    } else {
        echo "Error deleting staff: " . mysqli_error($conn);
    }
}
?>
