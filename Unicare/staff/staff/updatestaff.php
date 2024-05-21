<?php
require_once '../../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $salary = $_POST['salary'];
    $admin_user_id = $_POST['admin_user_id'];
    $name = $_POST['name'];
    $supervisor_id = $_POST['supervisor_id'];

    $update_sql = "UPDATE Staff SET Salary = $salary, Supervisor_id = $supervisor_id, Admin_user_id = $admin_user_id 
                   WHERE User_id = $user_id";

    if (mysqli_query($conn, $update_sql)) {
        $update_name_sql = "UPDATE Users SET name = '$name' WHERE user_id = $user_id";
        mysqli_query($conn, $update_name_sql);

        echo "Staff updated successfully.";
        header("Location: staff.php");
        exit();
    } else {
        echo "Error updating staff: " . mysqli_error($conn);
    }
}
?>
