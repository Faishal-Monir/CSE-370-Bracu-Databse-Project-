<?php
include "../welcome.php";
include "../dbconnect.php";

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $bloodBankID = $_POST["bloodBankID"];
    $bloodGroup = $_POST["bloodGroup"];
    $quantity = $_POST["quantity"];

    // Update blood quantity in the Blood_groups table
    $updateQuery = "UPDATE Blood_groups SET Quantity = Quantity + $quantity WHERE BloodBank_id = $bloodBankID AND Blood_groups = '$bloodGroup'";
    $result = mysqli_query($conn, $updateQuery);

    $updateQuery2 = "UPDATE Others SET bloodbank_id =$bloodBankID WHERE User_id =$user_id";
    $result = mysqli_query($conn, $updateQuery2);

    if ($result) {
        // Redirect to a confirmation page or back to the donate blood page
        header("Location: normalusers.php");
        exit();
    } else {
        echo "Error updating blood quantity: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
