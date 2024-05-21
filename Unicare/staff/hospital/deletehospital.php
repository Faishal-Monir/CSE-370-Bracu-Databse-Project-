<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hospital_id = $_POST['hospital_id'];

    $delete_location_sql = "DELETE FROM Hospital_location WHERE Hospital_id = $hospital_id";
    $delete_hospital_sql = "DELETE FROM Hospital WHERE Hospital_id = $hospital_id";

    if (mysqli_query($conn, $delete_location_sql) && mysqli_query($conn, $delete_hospital_sql)) {
        echo "Hospital deleted successfully.";
        header("Location: hospital.php");
        exit();
    } else {
        echo "Error deleting hospital: " . mysqli_error($conn);
    }
}
?>
