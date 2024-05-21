<?php
require_once '../../dbconnect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bloodbank_id = $_POST['bloodbank_id'];


    $deleteBloodGroupsSQL = "DELETE FROM Blood_groups WHERE BloodBank_id = $bloodbank_id";
    if (mysqli_query($conn, $deleteBloodGroupsSQL)) {
     
        $deletebloodbank = "DELETE FROM BloodBank WHERE Blood_bank_id = $bloodbank_id";
        if (mysqli_query($conn, $deletebloodbank)) {
            echo "Delete Successfull";
            header("Location: bloodbank.php");
            exit();
        } else {
            echo "Error deleting BloodBank data " . mysqli_error($conn);
        }
    } else {
        echo "Error deleting entries from Blood_groups table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

