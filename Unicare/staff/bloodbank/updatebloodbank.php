<?php
require_once '../../dbconnect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bloodbank_id = $_POST['bloodbank_id'];

    if (isset($_POST['A+']) && $_POST['A+'] !== '') {
        $quantity = $_POST['A+'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'A+'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['A-']) && $_POST['A-'] !== '') {
        $quantity = $_POST['A-'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'A-'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['B+']) && $_POST['B+'] !== '') {
        $quantity = $_POST['B+'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'B+'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['B-']) && $_POST['B-'] !== '') {
        $quantity = $_POST['B-'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'B-'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['AB+']) && $_POST['AB+'] !== '') {
        $quantity = $_POST['AB+'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'AB+'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['AB-']) && $_POST['AB-'] !== '') {
        $quantity = $_POST['AB-'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'AB-'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['O+']) && $_POST['O+'] !== '') {
        $quantity = $_POST['O+'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'O+'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }

    if (isset($_POST['O-']) && $_POST['O-'] !== '') {
        $quantity = $_POST['O-'];
        $updateBloodGroupsSQL = "UPDATE Blood_groups SET Quantity = $quantity WHERE BloodBank_id = $bloodbank_id AND Blood_groups = 'O-'";
        mysqli_query($conn, $updateBloodGroupsSQL);
    }


    echo "Blood bank quantities updated successfully.";

    mysqli_close($conn);
}
header("Location: bloodbank.php");
exit();
?>


