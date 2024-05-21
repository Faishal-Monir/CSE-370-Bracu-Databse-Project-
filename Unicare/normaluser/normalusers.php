<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../media/favicon.png" type="image/x-icon">
    <title>Normal Users!</title>
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="../media/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">Normal Users!</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Go Back to Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_profile.php">View Profile</a>
                </li>
                <li class="nav-item">
        <a class="nav-link" href="donate_blood.php">Donate Blood</a>
    </li>
            </ul>
            <a class="btn btn-outline-info ml-aut"  href="../signout.php" role="button" >Logout</a>
        </div>
    </nav>
    <!-- End Navigation Bar -->

    <div style="margin-top: 55px;">
        <?php
        include "../welcome.php";
        
        // Database Connection
        include "../dbconnect.php";

        // SQL Query to fetch blood banks with hospital information
        $query = "SELECT BloodBank.Blood_bank_id, Hospital.Name AS hospital_name, Hospital_location.Location AS hospital_location
                  FROM BloodBank
                  INNER JOIN Hospital ON BloodBank.Hospital_id = Hospital.Hospital_id
                  INNER JOIN Hospital_location ON Hospital.Hospital_id = Hospital_location.Hospital_id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Blood Bank ID: " . $row["Blood_bank_id"] . "</h5>";
                echo "<p class='card-text'>Hospital Name: " . $row["hospital_name"] . "</p>";
                echo "<p class='card-text'>Hospital Location: " . $row["hospital_location"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No blood banks available.";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </div>

    <footer class="footer">
        <?php
        $year = date("Y");
        echo "© $year All rights reserved by CSE-370 Group-4 [Unicare] Spring2024";
        ?>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
