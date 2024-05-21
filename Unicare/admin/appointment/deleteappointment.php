<?php

require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $doc_id = $_POST['ID'];

    $delete_sql = "DELETE FROM Appointment WHERE Doc_id = $doc_id";
    
    if (mysqli_query($conn, $delete_sql)) {
        echo "Appointment deleted successfully.";

        header("Location: appointment.php");
        exit(); 
    } 
    else {
        echo "Error: " . $delete_sql . "<br>" . mysqli_error($conn);
    }  
}

?>
