<?php
// Start the session to access session variables
session_start();

// Include the file containing the database connection code
require_once '../dbconnect.php';
?>
<!-- HTML with buttons -->
<button onclick="updatePatientName(<?php echo $patient_id; ?>)">Update Name</button>

<script>
// JavaScript function to handle button click and send AJAX request
function updatePatientName(patientId) {
    var newName = prompt("Enter new name:");
    if (newName !== null) {
        $.ajax({
            url: 'update patient information.php',
            type: 'POST',
            data: { patient_id: patientId, name: newName },
            success: function(response) {
                alert(response); // Display success or error message
            },
            error: function(xhr, status, error) {
                console.error(error); // Log any errors
            }
        });
    }
}
</script>

// PHP script (update_patient.php) to handle AJAX request
<?php
require_once 'dbconnect.php';

if (isset($_POST['patient_id'], $_POST['name'])) {
    $patientId = $_POST['patient_id'];
    $newName = $_POST['name'];
    
    if (updatePatientInfo($conn, $patientId, $newName)) {
        echo "Patient name updated successfully.";
    } else {
        echo "Error updating patient name.";
    }
} else {
    echo "Invalid request.";
}
?>