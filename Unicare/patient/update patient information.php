<?php
session_start();

require_once '../dbconnect.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the necessary parameters are set
    if (isset($_POST['patient_id']) && isset($_POST['name'])) {
        // Sanitize input data
        $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        // Perform the update operation
        $sql = "UPDATE Patient SET name='$name' WHERE User_id=$patient_id";
        if ($conn->query($sql) === TRUE) {
            // Return success message
            echo "Patient information updated successfully.";
        } else {
            // Return error message
            echo "Error updating patient information: " . $conn->error;
        }

        // Update the user information
        $sql_user = "UPDATE Users SET name='$name' WHERE user_id=$patient_id";
        if ($conn->query($sql_user) === TRUE) {
            // Return success message for user update
            echo "User information updated successfully.";
        } else {
            // Return error message for user update
            echo "Error updating user information: " . $conn->error;
        }

        // Update the authentication information
        $sql_auth = "UPDATE Authentication SET user_email='$email' WHERE User_id=$patient_id";
        if ($conn->query($sql_auth) === TRUE) {
            // Return success message for authentication update
            echo "Authentication information updated successfully.";
        } else {
            // Return error message for authentication update
            echo "Error updating authentication information: " . $conn->error;
        }
    } else {
        // Return error message if parameters are missing
        echo "Missing parameters.";
    }
} else {
    // Return error message if request method is not POST
    echo "Invalid request method.";
}
?>
