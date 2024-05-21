<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Appointment</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 70px; 
        }
        .container {
            max-width: 600px;
            margin: 20px auto 0;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form label {
            font-weight: bold;
        }
        form input, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .appointment-details {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .appointment-details p {
            margin-bottom: 10px;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
        <img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Unicare
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="appointment.php">Previous Page</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-info" href="../signout.php" role="button">Logout</a>
            </li>
        </ul>
    </div>
</nav>


<div>
    <?php
    include "../welcome.php";
    ?>
</div>

<?php
require_once '../dbconnect.php'; 


if (!isset($_GET['appointment_id'])) {
    die("Appointment ID is missing.");
}

$appointment_id = $_GET['appointment_id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = isset($_POST['status']) ? intval($_POST['status']) : null;
    $date = isset($_POST['date']) ? $_POST['date'] : null;
    $time = isset($_POST['time']) ? $_POST['time'] : null;

    
    $updateSql = "UPDATE Appointment SET Status = '$status', Date = '$date', Time = '$time' WHERE Doc_id = $appointment_id";

    if ($conn->query($updateSql) === true) {
        $successMessage = "Appointment updated successfully.";
    } else {
        $errorMessage = "Failed to update appointment. Please try again.";
    }
}

$sql = "SELECT * FROM Appointment WHERE Doc_id = $appointment_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $appointment = $result->fetch_assoc();
} else {
    die("Appointment not found.");
}

$conn->close(); 
?>

<div class="container">
    <h2>Update Appointment</h2>

    <?php if (isset($successMessage)) : ?>
        <div class="success-message">
            <?php echo $successMessage; ?>
        </div>
    <?php endif; ?>

    <form id="updateForm" method="POST">
        <input type="hidden" name="appointment_id" value="<?php echo $appointment_id; ?>">
        
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="1" <?php echo ($appointment['Status'] == 1) ? 'selected' : ''; ?>>Active</option>
            <option value="0" <?php echo ($appointment['Status'] == 0) ? 'selected' : ''; ?>>Inactive</option>
        </select>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="<?php echo $appointment['Date']; ?>">

        <label for="time">Time:</label>
        <input type="time" name="time" id="time" value="<?php echo $appointment['Time']; ?>">

        <input type="submit" value="Update Appointment">
    </form>

  
    <div class="appointment-details">
        <h3>Current Appointment Details:</h3>
        <p><strong>Status:</strong> <span id="statusDisplay"><?php echo ($appointment['Status'] == 1) ? 'Active' : 'Inactive'; ?></span></p>
        <p><strong>Date:</strong> <span id="dateDisplay"><?php echo $appointment['Date']; ?></span></p>
        <p><strong>Time:</strong> <span id="timeDisplay"><?php echo $appointment['Time']; ?></span></p>
    </div>
</div>


<script>
    document.getElementById('updateForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        const formData = new FormData(this); 
        
        
        fetch(window.location.href, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.includes('Appointment updated successfully')) {
                document.querySelector('.container').innerHTML += '<div class="success-message">' + data + '</div>';
        
                document.getElementById('statusDisplay').textContent = formData.get('status') === '1' ? 'Active' : 'Inactive';
                document.getElementById('dateDisplay').textContent = formData.get('date');
                document.getElementById('timeDisplay').textContent = formData.get('time');
            
                setTimeout(function() {
                    document.querySelector('.success-message').style.display = 'none';
                }, 3000);
            } else {
                alert('Failed to update appointment. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });
</script>



<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
