<?php
$patient_id = $_GET['patient_id']; // Assuming patient ID is passed as a parameter


function getPatientInfo($conn, $patient_id) {
    $sql = "SELECT * FROM Patient WHERE User_id = $patient_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
?>