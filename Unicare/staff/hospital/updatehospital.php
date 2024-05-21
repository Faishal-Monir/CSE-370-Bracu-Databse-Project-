<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hospital_id = $_POST['hospital_id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $admin_user_id = $_POST['admin_user_id'];

    $update_hospital_sql = "UPDATE Hospital SET Name = '$name', Admin_user_id = $admin_user_id WHERE Hospital_id = $hospital_id";
    $update_location_sql = "UPDATE Hospital_location SET Location = '$location' WHERE Hospital_id = $hospital_id";

    if (mysqli_query($conn, $update_hospital_sql) && mysqli_query($conn, $update_location_sql)) {
        echo "Hospital updated successfully.";
        header("Location: hospital.php");
        exit();
    } else {
        echo "Error updating hospital: " . mysqli_error($conn);
    }
}
?>
