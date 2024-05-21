<?php

require_once '../dbconnect.php';
include '../welcome.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['user_id'])) {

    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $_SESSION['name'] = $name;
    


    if (!empty($name) || !empty($age) || !empty($address)) {

        $updateQuery = "UPDATE Users SET name = '$name', age = $age, address = '$address' WHERE user_id = '$user_id'";


        if (!mysqli_query($conn, $updateQuery)) {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    header("Location: update_admin.php");
    exit();
} else {
    header("Location: update_admin.php");
    exit();
}
?>
