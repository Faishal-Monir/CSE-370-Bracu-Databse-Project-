<?php

require_once '../dbconnect.php';


if(isset($_POST['deleteUserId']) && !empty($_POST['deleteUserId'])) {

    $deleteUserId = $_POST['deleteUserId'];


    $sql = "DELETE FROM Admin WHERE User_id = '$deleteUserId'";

    if(mysqli_query($conn, $sql)) {

        header("Location: add_remove_admin.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {

    header("Location: add_remove_admin.php");
    exit();
}
?>
