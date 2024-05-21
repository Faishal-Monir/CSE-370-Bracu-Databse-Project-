
<?php

require_once '../dbconnect.php';


if(isset($_POST['addUserId']) && !empty($_POST['addUserId'])) {

    $addUserId = $_POST['addUserId'];


    $sql = "INSERT INTO Admin (User_id) VALUES ('$addUserId')";

    if(mysqli_query($conn, $sql)) {

        header("Location: add_remove_admin.php");
        exit();
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }
} else {

    header("Location: add_remove_admin.php");
    exit();
}
?>
