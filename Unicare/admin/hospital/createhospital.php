<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hospital_id = $_POST['hospital_id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $admin_user_id = -1;

    $insert_hospital_sql = "INSERT INTO Hospital (Hospital_id, Name, Admin_user_id) VALUES ($hospital_id, '$name', $admin_user_id)";
    $insert_location_sql = "INSERT INTO Hospital_location (Hospital_id, Location) VALUES ($hospital_id, '$location')";

    if (mysqli_query($conn, $insert_hospital_sql) && mysqli_query($conn, $insert_location_sql)) {
        echo "Hospital created successfully.";
        header("Location: hospital.php");
        exit();
    } else {
        echo "Error creating hospital: " . mysqli_error($conn);
    }
}
?>
