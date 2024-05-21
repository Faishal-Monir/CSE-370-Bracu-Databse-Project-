<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hospital_id = $_POST['hospital_id'];


    $insertBloodBankSQL = "INSERT INTO BloodBank (Blood_bank_id,Hospital_id, Admin_user_id) VALUES ('$hospital_id','$hospital_id', -1)";
    
    if (mysqli_query($conn, $insertBloodBankSQL)) {

        $bloodBankID = $hospital_id;


        $bloodGroups = array('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-');

        foreach ($bloodGroups as $group) {
            $insertbloodgroup = "INSERT INTO Blood_groups (BloodBank_id, Blood_groups, Quantity) VALUES ('$bloodBankID', '$group', 0)";
            mysqli_query($conn, $insertbloodgroup);
        }

        echo "Blood bank created successfully.";
        header("Location: bloodbank.php");
        exit();
    } else {
        echo "Error: " . $insertBloodBankSQL . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
