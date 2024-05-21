<?php
require_once '../../dbconnect.php';

if(isset($_POST['user_id'], $_POST['name'], $_POST['disease'], $_POST['date'], $_POST['admin_user_id'])) {
 
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $disease = $_POST['disease'];
    $date = $_POST['date'];
    $admin_user_id = $_POST['admin_user_id'];


    $appointment_id = !empty($_POST['appointment_id']) ? $_POST['appointment_id'] : null;
    $ambulance_id = !empty($_POST['ambulance_id']) ? $_POST['ambulance_id'] : null;
    $bloodbank_id = !empty($_POST['bloodbank_id']) ? $_POST['bloodbank_id'] : null;

  
    if(!empty($appointment_id)) {
        $sql_check_appointment = "SELECT Doc_id FROM Appointment WHERE Doc_id = '$appointment_id'";
        $result_appointment = mysqli_query($conn, $sql_check_appointment);
        if(mysqli_num_rows($result_appointment) == 0) {
            echo "Error: Appointment ID does not exist.";
            exit();
        }
    }

 
    if(!empty($bloodbank_id)) {
        $sql_check_bloodbank = "SELECT Blood_bank_id FROM BloodBank WHERE Blood_bank_id = '$bloodbank_id'";
        $result_bloodbank = mysqli_query($conn, $sql_check_bloodbank);
        if(mysqli_num_rows($result_bloodbank) == 0) {
            echo "Error: Blood Bank ID does not exist.";
            exit();
        }
    }

  
    $sql_patient = "UPDATE Patient SET Disease='$disease', Date='$date', Appointment_id='$appointment_id', Ambulance_id='$ambulance_id', Bloodbank_id='$bloodbank_id', Admin_user_id='$admin_user_id' WHERE User_id='$user_id'";

    $sql_user = "UPDATE Users SET name='$name' WHERE user_id='$user_id'";


    if(mysqli_query($conn, $sql_patient) && mysqli_query($conn, $sql_user)) {
        echo "Patient updated successfully";
    } else {
        echo "Error updating patient: " . mysqli_error($conn);
    }
} else {
    echo "Please fill out all required fields.";
}


header("Location: patient.php");
exit();
?>
