<?php
require_once '../../dbconnect.php';
$user_id = $_POST['user_id'];
$blood_quantity = $_POST['blood_quantity'];
$sql = "SELECT Quantity FROM Blood_groups WHERE BloodBank_id = (SELECT Bloodbank_id FROM Patient WHERE User_id = $user_id)";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$current_quantity = $row['Quantity'];

if ($current_quantity >= $blood_quantity) {
    $new_quantity = $current_quantity - $blood_quantity;
    $update_sql = "UPDATE Blood_groups SET Quantity = $new_quantity WHERE BloodBank_id = (SELECT Bloodbank_id FROM Patient WHERE User_id = $user_id)";
    mysqli_query($conn, $update_sql);

    echo "Blood taken successfully.";
} else {
    echo "Insufficient blood quantity.";
}
?>