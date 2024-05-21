<?php
require_once '../dbconnect.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ambulance_id'])) {
    $ambulance_id = $_POST['ambulance_id'];

    
    $check_query = "SELECT * FROM Patient WHERE User_id = '$user_id'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        
        $update_query = "UPDATE Patient SET Ambulance_id = '$ambulance_id' WHERE User_id = '$user_id'";
        
        if (mysqli_query($conn, $update_query)) {
            header("Location: booked_successfully.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        
        $insert_query = "INSERT INTO Patient (User_id, Ambulance_id) 
                         VALUES ('$user_id', '$ambulance_id')";

        if (mysqli_query($conn, $insert_query)) {
            header("Location: ../patient/patient.php");
            exit();
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
}

$sql = "SELECT * FROM Ambulance";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Available Ambulance</title>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <style>
        
        .ambulance-card {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span>Unicare</span>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Homepage</a>
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

    <div class="container">
        <h1 class="my-4">All Available Ambulances</h1>
        
        <div class="row">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4">
                <div class="ambulance-card">
                    <h3>ID: <?php echo $row['ID']; ?></h3>
                    <p><strong>Cost:</strong> <?php echo $row['Cost']; ?></p>
                    <p><strong>Coverage Area:</strong> <?php echo $row['Coverage_area']; ?></p>
                    
                    <!-- Booking Form -->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="hidden" name="ambulance_id" value="<?php echo $row['ID']; ?>">
                        <button type="submit" class="btn btn-primary">Book Ambulance</button>
                    </form>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<div class='col-md-12'><p>No records found.</p></div>";
            }
            ?>
        </div>
    </div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
