<?php
require_once '../../dbconnect.php';

$user_id = $_POST['user_id'];
$doctor_id = $_POST['doctor_id'];
$date = $_POST['date'];
$time = $_POST['time'];

$insert_sql = "INSERT INTO Appointment (Doc_id, Status, Date, Time, Name, Admin_user_id) VALUES ($doctor_id, true, '$date', '$time', 'Patient Appointment', 1)"; // Assuming admin_user_id = 1
mysqli_query($conn, $insert_sql);


echo "Appointment booked successfully.";
?>