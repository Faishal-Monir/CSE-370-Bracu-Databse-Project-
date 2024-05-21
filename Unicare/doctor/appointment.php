<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor Appointments</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .action-links a {
            text-decoration: none;
            margin-right: 06px;
            padding: 3px 06px;
            border-radius: 3px;
            color: #fff;
        }
        .action-links a.update {
            background-color: #007bff; 
        }
        .action-links a.delete {
            background-color: #dc3545; 
        }
        .message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #DFF2BF;
            color: #4F8A10;
        }
        .error {
            background-color: #FFBABA;
            color: #D8000C;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Unicare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">Previous Page</a>
                </li>
            </ul>
            <a class="btn btn-outline-info ml-auto" href="../signout.php" role="button">Logout</a>
        </div>
    </nav>
<div style="margin-top:20px;">
    <?php include "../welcome.php"; ?>
</div>

<?php

require_once '../dbconnect.php';

$user_id = $_SESSION['user_id'];


$sql = "SELECT * FROM Appointment WHERE Doc_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Appointments</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $appointment_id = $row['Doc_id'];
        $status = $row['Status'] ? 'Active' : 'Inactive';
        $date = $row['Date'];
        $time = $row['Time'];
        echo "<li>";
        echo "<strong>Status:</strong> $status - <strong>Date:</strong> $date, <strong>Time:</strong> $time";
        echo "<div class='action-links'>";
        echo "<a class='update' href='update_appointment.php?appointment_id=$appointment_id'>Update</a>";
        echo "<a class='delete' href='delete_appointment.php?appointment_id={$row['Doc_id']}&user_id=$user_id' onclick='return confirm(\"Are you sure you want to delete this appointment?\")'>Delete</a>";
        echo "</div>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No appointments found.</p>";
}

$conn->close();
?>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
