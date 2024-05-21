<?php
require_once '../../dbconnect.php';

if(isset($_POST['user_id'], $_POST['Disease'], $_POST['date'])) {

    $user_id = $_POST['user_id'];
    $disease = $_POST['Disease'];
    $date = $_POST['date'];


    $admin_user_id = -1;


    $appointment_id = Null;
    $ambulance_id = Null;
    $bloodbank_id = Null;


    if(isset($_POST['appointment_id']) && $_POST['appointment_id'] !== '') {
        $appointment_id = $_POST['appointment_id'];
        $sql_check_appointment = "SELECT Doc_id FROM Appointment WHERE Doc_id = '$appointment_id'";
        $result_appointment = mysqli_query($conn, $sql_check_appointment);
        if(mysqli_num_rows($result_appointment) == 0) {
            echo "Error: Appointment ID does not exist.";
            exit();
        }
    }


    if(isset($_POST['ambulance_id']) && $_POST['ambulance_id'] !== '') {
        $ambulance_id = $_POST['ambulance_id'];
        $sql_check_ambulance = "SELECT ID FROM Ambulance WHERE ID = '$ambulance_id'";
        $result_ambulance = mysqli_query($conn, $sql_check_ambulance);
        if(mysqli_num_rows($result_ambulance) == 0) {
            echo "Error: Ambulance ID does not exist.";
            exit();
        }
    }


    if(isset($_POST['bloodbank_id']) && $_POST['bloodbank_id'] !== '') {
        $bloodbank_id = $_POST['bloodbank_id'];
        $sql_check_bloodbank = "SELECT Blood_bank_id FROM BloodBank WHERE Blood_bank_id = '$bloodbank_id'";
        $result_bloodbank = mysqli_query($conn, $sql_check_bloodbank);
        if(mysqli_num_rows($result_bloodbank) == 0) {
            echo "Error: Blood Bank ID does not exist.";
            exit();
        }
    }


    $sql = "INSERT INTO Patient (User_id, Disease, Date, Appointment_id, Ambulance_id, Bloodbank_id, Admin_user_id) 
            VALUES ('$user_id', '$disease', '$date', '$appointment_id', '$ambulance_id', '$bloodbank_id', '$admin_user_id')";


    if(mysqli_query($conn, $sql)) {
    
        header("Location: patient.php");
        exit();
    } else {
    
        echo "Error creating patient: " . mysqli_error($conn);
    }
} else {

    echo "Please fill out all required fields.";
}
?>
