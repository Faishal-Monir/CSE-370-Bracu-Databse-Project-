<?php
function deletePatientInfo($conn, $patient_id) {
    $sql = "DELETE FROM Patient WHERE User_id=$patient_id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>