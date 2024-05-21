<?php
if (!isset($_GET['appointment_id'])) {
    die("Appointment ID is missing.");
}

$appointment_id = $_GET['appointment_id'];

if (!isset($_GET['user_id'])) {
    die("User ID is missing.");
}

$user_id = $_GET['user_id'];

require_once '../dbconnect.php';

$sql_delete = "DELETE FROM Appointment WHERE Doc_id = ?";
$stmt_delete = $conn->prepare($sql_delete);

if (!$stmt_delete) {
    die("Error preparing delete statement: " . $conn->error);
}
$stmt_delete->bind_param("i", $appointment_id);

if (!$stmt_delete->execute()) {
    die("Error deleting appointment: " . $stmt_delete->error);
}

$stmt_delete->close();

$sql_fetch_appointments = "SELECT * FROM Appointment WHERE Doc_id = ?";
$stmt_fetch_appointments = $conn->prepare($sql_fetch_appointments);

if (!$stmt_fetch_appointments) {
    die("Error preparing fetch statement: " . $conn->error);
}

$stmt_fetch_appointments->bind_param("i", $user_id);

if (!$stmt_fetch_appointments->execute()) {
    die("Error fetching appointments: " . $stmt_fetch_appointments->error);
}

$result = $stmt_fetch_appointments->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        li:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .action-links {
            margin-top: 5px;
        }
        .action-links a {
            text-decoration: none;
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
        }
        .action-links a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<h2>Appointments</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $status = $row['Status'] ? 'Active' : 'Inactive';
        $date = $row['Date'];
        $time = $row['Time'];
        echo "<li>";
        echo "<strong>Status:</strong> $status - <strong>Date:</strong> $date, <strong>Time:</strong> $time";
        echo "<div class='action-links'>";
        echo "<a href='delete_appointment.php?appointment_id={$row['Appointment_id']}&user_id=$user_id' onclick='return confirm(\"Are you sure you want to delete this appointment?\")'>Delete</a>";
        echo "</div>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No appointments found.</p>";
}

$stmt_fetch_appointments->close();
$conn->close();
?>

</body>
</html>
