<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $salary = $_POST['salary'];
    $admin_user_id = $_POST['admin_user_id'];
    $supervisor_id = 'NULL';

    $insert_sql = "INSERT INTO Staff (User_id, Salary, Supervisor_id, Admin_user_id) 
                   VALUES ($user_id, $salary, $supervisor_id, $admin_user_id)";
        
    if (mysqli_query($conn, $insert_sql)) {
        echo "Staff created successfully.";
        header("Location: staff.php");
        exit();
    } else {
        echo "Error creating staff: " . mysqli_error($conn);
    }
}
?>
