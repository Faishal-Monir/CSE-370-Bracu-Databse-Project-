<?php
require_once '../../dbconnect.php';

if(isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM Patient WHERE User_id='$user_id'";

    if(mysqli_query($conn, $sql)) {
        echo "Patient deleted successfully";
        header("Location: patient.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Please provide a User ID to delete the patient.";
}
?>
